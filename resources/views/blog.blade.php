
@extends('layouts.main')

@section('container')
    <h1>Blog Page</h1>

    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
        </h2>
        <h5>Author: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
    @endforeach
@endSection