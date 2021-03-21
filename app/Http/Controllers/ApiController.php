<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //return posts
    public function index(Request $request){
        $posts = Post::all();
        return response($posts, 200);
    }

    //return post with required id
    public function get_post(Request $request){
        $post = Post::find($request->$post_id);
        if($post == null)
        return response(['message' => 'post is not found'], 404);
        
        return response($post, 200);
    }
}
