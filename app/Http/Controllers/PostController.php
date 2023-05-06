<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // Route ('/')
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    // Route ('posts/{post:slug}')
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
