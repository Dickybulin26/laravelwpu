@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/blog?category={{ $category->slug }}">
                <div class="card text-bg-dark">
                    {{-- <img src="https://source.unsplash.com/500x400/?{{ $category->name }}"
                    class="card-img" alt="{{ $category->name }}"> --}}
                    <img src="https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="card-img" alt="{{ $category->name }}" style="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3"
                            style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endSection