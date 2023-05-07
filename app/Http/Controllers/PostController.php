<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    // Route ('/')
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
        ]);
    }

    // Route ('posts/{post:slug}')
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // Route ('authors/{author:username}')
    public function author(User $author)
    {
        return view('posts.index', [
            'posts' => $author->posts,
        ]);
    }
}
