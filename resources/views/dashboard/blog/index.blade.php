
@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive small col-lg-8">
  <a href="/dashboard/blog/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg"></i> Add New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">category</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/blog/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
            <a href="" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection