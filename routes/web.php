<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/blog', [PostController::class, 'index']);

//* halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
