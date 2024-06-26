@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>Author: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in 
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="text-decoration-none d-block mt-3">back to blog</a>
@endSection