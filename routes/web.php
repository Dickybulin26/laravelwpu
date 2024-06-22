<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Dicky',
        'email' => 'Programmer',
        'image' => 'img/dicky.jpg'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            'slug' => 'judul-post-pertama',
            "author" => "Dicky",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet placeat odit eius iste commodi in similique quam voluptatum! Aliquam placeat obcaecati ab. Aspernatur animi architecto distinctio tempora, repellat fugiat ab reiciendis quae vitae. Consectetur praesentium odio id eveniet beatae perspiciatis quasi maxime nostrum veritatis! Iste, veniam officiis, est magni suscipit itaque delectus odio aliquam nostrum eos et at asperiores cum cumque ipsam, vitae assumenda totam eveniet illo. Suscipit laborum dolorem ea vitae totam, eum magni tenetur consequuntur nostrum ipsum officiis.'
        ],
        [
            "title" => "Judul Post Kedua",
            'slug' => 'judul-post-kedua',
            "author" => "Jamal",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet placeat odit eius iste commodi in similique quam voluptatum! Aliquam placeat obcaecati ab. Aspernatur animi architecto distinctio tempora, repellat fugiat ab reiciendis quae vitae. Consectetur praesentium odio id eveniet beatae perspiciatis quasi maxime nostrum veritatis! Iste, veniam officiis, est magni suscipit itaque delectus odio aliquam nostrum eos et at asperiores cum cumque ipsam, vitae assumenda totam eveniet illo. Suscipit laborum dolorem ea vitae totam, eum magni tenetur consequuntur nostrum ipsum officiis.'
        ]
    ];

    return view('blog',[
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});




//* halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            'slug' => 'judul-post-pertama',
            "author" => "Dicky",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet placeat odit eius iste commodi in similique quam voluptatum! Aliquam placeat obcaecati ab. Aspernatur animi architecto distinctio tempora, repellat fugiat ab reiciendis quae vitae. Consectetur praesentium odio id eveniet beatae perspiciatis quasi maxime nostrum veritatis! Iste, veniam officiis, est magni suscipit itaque delectus odio aliquam nostrum eos et at asperiores cum cumque ipsam, vitae assumenda totam eveniet illo. Suscipit laborum dolorem ea vitae totam, eum magni tenetur consequuntur nostrum ipsum officiis.'
        ],
        [
            "title" => "Judul Post Kedua",
            'slug' => 'judul-post-kedua',
            "author" => "Jamal",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet placeat odit eius iste commodi in similique quam voluptatum! Aliquam placeat obcaecati ab. Aspernatur animi architecto distinctio tempora, repellat fugiat ab reiciendis quae vitae. Consectetur praesentium odio id eveniet beatae perspiciatis quasi maxime nostrum veritatis! Iste, veniam officiis, est magni suscipit itaque delectus odio aliquam nostrum eos et at asperiores cum cumque ipsam, vitae assumenda totam eveniet illo. Suscipit laborum dolorem ea vitae totam, eum magni tenetur consequuntur nostrum ipsum officiis.'
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post',[
        'title' => 'Single Post', //? ini title dari halamannya bukan dari postingan
        'post' => $new_post
    ]);
});
