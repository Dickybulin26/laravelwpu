@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <article class="my-3 fs-5">
        
                <h5>Author: <a href="/blog?author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

                    <img src="https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="{{ $post->category->name }}" class="img-fluid">

                {!! $post->body !!}
            </article>
        
            <a href="/blog" class="text-decoration-none d-block mt-3">back to blog</a>
        </div>
    </div>
</div>

@endSection