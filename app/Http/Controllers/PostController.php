<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;




class PostController extends Controller
{
    public function index()
    {
        return view('posts/posts', [
            "title" => "All Posts",
            "categories" => Category::all(),
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts/post', [
            "title" => "Post",
            "categories" => Category::all(),
            "post" => $post
        ]);
    }
}
