@extends ('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/blog">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">slug</label>
          <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">body</label>
          <input type="hidden" id="body" name="body">
          <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary mb-3">Create Post</button>
      </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', () => {
        fetch('/dashboard/blog/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    })

    // turn off add image file feature on trix
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

@endsection