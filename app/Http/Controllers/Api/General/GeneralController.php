<?php

namespace App\Http\Controllers\Api\General;

use App\Http\Controllers\Controller;
use App\Http\Resources\General\PostResource;
use App\Http\Resources\General\PostsResource;
use App\Http\Resources\General\ProductResource;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\NewCommentForAdminNotify;
use App\Notifications\NewCommentForPostOwnerNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stevebauman\Purify\Facades\Purify;

class GeneralController extends Controller
{

    public function get_product($slug)
    {
        $product = Product::with('media', 'category', 'tags', 'reviews')->withAvg('reviews', 'rating')->whereSlug($slug)
            ->Active()->HasQuantity()->ActiveCategory()->firstOrFail();

        $relatedProducts = Product::with('firstMedia')->whereHas('category', function ($query) use ($product) {
            $query->whereId($product->product_category_id);
            $query->whereStatus(true);
        })->inRandomOrder()->Active()->HasQuantity()->take(4)->get();
        if ($product->count() > 0) {
            return ProductResource::collection($product);
        } else {
            return response()->json(['error' => true, 'message'=> 'No posts found'], 201);
        }


    }
    public function category()
    {

    }
    public function tag()
    {

    }
    public function show_product()
    {

    }

//    public function search(Request $request)
//    {
//        $keyword = isset($request->keyword) && $request->keyword != '' ? $request->keyword : null;
//
//        $posts = Post::with(['media', 'user', 'tags'])
//            ->whereHas('category', function ($query) {
//                $query->whereStatus(1);
//            })
//            ->whereHas('user', function ($query) {
//                $query->whereStatus(1);
//            });
//
//        if ($keyword != null) {
//            $posts = $posts->search($keyword, null, true);
//        }
//
//        $posts = $posts->post()->active()->orderBy('id', 'desc')->get();
//
//        if ($posts->count() > 0) {
//            return PostsResource::collection($posts);
//        } else {
//            return response()->json(['error' => true, 'message'=> 'No posts found'], 201);
//        }
//    }
//
//    public function category($slug)
//    {
//        $category = Category::whereSlug($slug)->whereStatus(1)->first();
//
//        if ($category) {
//            $posts = Post::with(['media', 'user', 'tags'])
//                ->whereCategoryId($category->id)
//                ->post()
//                ->active()
//                ->orderBy('id', 'desc')
//                ->get();
//
//            if ($posts->count() > 0) {
//                return PostsResource::collection($posts);
//            } else {
//                return response()->json(['error' => true, 'message'=> 'No posts found'], 201);
//            }
//        }
//
//        return response()->json(['error' => true, 'message'=> 'Something was wrong'], 201);
//    }
//
//    public function tag($slug)
//    {
//        $tag = Tag::whereSlug($slug)->first()->id;
//
//        if ($tag) {
//            $posts = Post::with(['media', 'user', 'tags'])
//                ->whereHas('tags', function ($query) use ($slug) {
//                    $query->where('slug', $slug);
//                })
//                ->post()
//                ->active()
//                ->orderBy('id', 'desc')
//                ->get();
//
//            if ($posts->count() > 0) {
//                return PostsResource::collection($posts);
//            } else {
//                return response()->json(['error' => true, 'message'=> 'No posts found'], 201);
//            }
//        }
//
//        return response()->json(['error' => true, 'message'=> 'Something was wrong'], 201);
//    }
//
//    public function author($username)
//    {
//        $user = User::whereUsername($username)->whereStatus(1)->first();
//
//        if ($user) {
//            $posts = Post::with(['media', 'user', 'tags'])
//                ->whereUserId($user->id)
//                ->post()
//                ->active()
//                ->orderBy('id', 'desc')
//                ->get();
//
//            if ($posts->count() > 0) {
//                return PostsResource::collection($posts);
//            } else {
//                return response()->json(['error' => true, 'message'=> 'No posts found'], 201);
//            }
//        }
//
//        return response()->json(['error' => true, 'message'=> 'Something was wrong'], 201);
//    }
//
//    public function show_post($slug)
//    {
//        $post = Post::with(['category', 'media', 'user', 'tags',
//            'approved_comments' => function($query) {
//                $query->orderBy('id', 'desc');
//            }
//        ]);
//
//        $post = $post->whereHas('category', function ($query) {
//            $query->whereStatus(1);
//        })
//            ->whereHas('user', function ($query) {
//                $query->whereStatus(1);
//            });
//
//        $post = $post->whereSlug($slug);
//        $post = $post->active()->post()->first();
//
//        if($post) {
//
//            return new PostResource($post);
//        } else {
//            return response()->json(['error' => true, 'message' => 'No post found'], 201);
//        }
//    }



}
