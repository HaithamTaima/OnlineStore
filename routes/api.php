<?php

use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\Customer\UsersController;
use App\Http\Controllers\Api\General\GeneralController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('register',                         [AuthController::class, 'register']);
Route::post('login',                            [AuthController::class, 'login']);
Route::post('refresh_token',                    [AuthController::class, 'refresh_token']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('logout',                       [UsersController::class, 'logout']);
    Route::patch('/edit_user_information',      [UsersController::class, 'update_user_information']);
    Route::patch('/edit_user_password',         [UsersController::class, 'update_user_password']);
    Route::get('/user_information',             [UsersController::class, 'user_information']);

});

Route::get('/all_product',                        [GeneralController::class, 'get_product']);

