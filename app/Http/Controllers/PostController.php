<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::with(['user','category'])->get();
        $posts->makeHidden(['user_id', 'category_id']);
        return response()->json([
                "status"=> 200,
                "posts"=>$posts
            ], 200);
    }

    public function show($id) {
        $post = Post::whereId($id)->with(['user','category'])->get();
        $post->makeHidden(['user_id', 'category_id']);
        return response()->json([
            "status"=> 200,
            "post"=> $post
        ]);
    }
}
