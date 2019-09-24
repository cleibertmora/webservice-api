<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    function all(Request $request){
        $posts = Post::all();

        return $posts;
    }

    function one($id){
        $post = Post::find($id);

        $content = $post->post_content;

        return $content;
    }
}
