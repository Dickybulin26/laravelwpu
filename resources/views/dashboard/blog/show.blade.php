
@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <article class="my-3 fs-5">

                <a href="/dashboard/blog" class="text-decoration-none btn btn-success">
                    <i class="bi bi-arrow-left"></i> Back To All My Post
                </a>
                <a href="/dashboard/blog/{{ $post->slug }}/edit" class="text-decoration-none btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Delete post, Are you sure?')">
                        <i class="bi bi-trash"></i> Hapus
                    </button>
        
                </form>

                    <img src="https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="{{ $post }}"class="img-fluid mt-3">

                {!! $post->body !!}
            </article>
        
        </div>
    </div>
</div>

@endsection