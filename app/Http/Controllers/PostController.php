<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
//use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            // Menggunakan use
            //"posts" => Post::all()

            // Menggunakan expand class
            "posts" => \App\Models\Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
