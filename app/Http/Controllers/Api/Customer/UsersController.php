<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CustomerRequest;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function user_information()
    {
        $user = \auth()->user();
        return response()->json($user, 200);
    }


    public function update_user_information(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'          => 'required',
            'last_name'          => 'required',
            'email'         => 'required|email',
            'mobile'        => 'required|numeric',
            'user_image'    => 'nullable|image|max:20000,mimes:jpeg,jpg,png'
        ]);
        if($validator->fails()) {
            return response()->json(['errors' => true, 'message' => $validator->errors()], 200);
        }

        $user = auth()->user();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;



        if ($user_image = $request->file('user_image')) {
            if ($user->user_image != '') {
                if (File::exists('assets/users/' . $user->user_image)){
                    unlink('assets/users/' . $user->user_image);
                }
            }

            $file_name = $user->username . '.' . $user_image->extension();
            $path = public_path('assets/users/'. $file_name);
            Image::make($user_image->getRealPath())->resize(300, null, function ($constraints) {
                $constraints->aspectRatio();
            })->save($path, 100);
            $data['user_image'] = $file_name;
        }

        $update = auth()->user()->update($data);

        if ($update) {
            return response()->json(['errors' => false, 'message' => 'Information updated successfully'], 200);

        } else {
            return response()->json(['errors' => true, 'message' => 'Something was wrong'], 200);
        }
    }

    public function update_user_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password'  => 'required',
            'password'          => 'required|confirmed'
        ]);
        if($validator->fails()) {
            return response()->json(['errors' => true, 'message' => $validator->errors()], 200);
        }

        $user = auth()->user();
        if (Hash::check($request->current_password, $user->password)) {
            $update = $user->update([
                'password' => bcrypt($request->password),
            ]);

            if ($update) {
                return response()->json(['errors' => false, 'message' => 'Password updated successfully'], 200);
            } else {
                return response()->json(['errors' => true, 'message' => 'Something was wrong'], 200);
            }

        } else {
            return response()->json(['errors' => true, 'message' => 'Something was wrong'], 200);
        }
    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['errors' => false, 'message' => 'Successfully logged out']);
    }

}
