@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>Author: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">back to blog</a>
@endSection