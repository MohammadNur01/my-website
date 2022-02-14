<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts/posts', [
            "title" => "All Posts",
            // "categories" => Post::allCat(),
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts/post', [
            "title" => "Post",
            // "categories" => Post::allCat(),
            "post" => $post
        ]);
    }
}
