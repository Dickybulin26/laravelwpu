@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..."
                            name="search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>



@if($posts->count() > 0)
    <div class="card mb-3">
        {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
        alt="{{ $posts[0]->category->name }}"> --}}
        <img src="https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" style="height: 400px;"
        alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
            {{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-body-secondary">
                <h5>Author: <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                {{ $posts[0]->category->name }}</a></h5> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
        </div>
    </div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    {{-- <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" 
                    alt="{{ $post->category->name }}"> --}}
                    <img src="https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top width-400 height-500"
                    alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        <small class="text-body-secondary">
                            <h5>Author: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">
                                {{ $post->author->name }}</a></h5> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No post found.</p>
@endif

{{ $posts->links() }}

@endSection