@extends('layouts.main')

@section('container')
    <h1>Blog Page</h1>

    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            <h5>Author: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}</a></h5>
        </h2>
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more</a>
    </article>
    @endforeach
@endSection