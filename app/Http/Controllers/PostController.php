<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    //* menampilkan semua post
    public function index()
    {

        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        $posts = Post::latest();

        return view('blog',[
            'title' => 'all posts' . $title,
            'active' => 'blog',
            'posts' => $posts->filter(request(['search','category','author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post){
        /**
         ** menampilkan single post
         */
        return view('post',[
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
