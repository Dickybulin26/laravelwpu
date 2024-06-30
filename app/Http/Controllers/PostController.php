<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //* menampilkan semua post
    public function index()
    {
        return view('blog',[
            'title' => 'Blog',
            'posts' => Post::all(),
        ]);
    }

    public function show(Post $post){
        /**
         ** menampilkan single post
         */
        return view('post',[
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
