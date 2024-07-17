@extends ('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/blog/{{ $post->slug }}" class="mb-5">
        @method("PATCH")
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror"
          id="title" name="title" required autofocus value="{{ $post->title }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror"
          id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              @if(old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">body</label>
          @error('body')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
          <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary mb-3">Update Post</button>
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
{{-- 
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora unde reiciendis architecto excepturi tenetur sint id deleniti earum nobis numquam! Velit similique blanditiis, vero hic asperiores qui laborum autem dolorum possimus molestiae delectus itaque minima dignissimos a labore praesentium.

Perferendis possimus vitae quaerat repudiandae temporibus maxime, rerum minima. Explicabo aspernatur quibusdam adipisci nulla vel deserunt iste ex itaque fugiat, rerum consequuntur quos, sequi, laboriosam voluptatum aperiam dolore veritatis sit? Voluptatibus soluta asperiores eaque exercitationem qui suscipit! Aperiam ipsa, autem, fuga illo facilis ea perferendis incidunt pariatur inventore, aut optio doloremque.


Esse, sapiente natus adipisci ullam est saepe maxime incidunt. Fugit cumque, excepturi veritatis nulla veniam molestiae dolor consectetur quod recusandae cum perspiciatis maiores possimus. In doloribus praesentium expedita quaerat. Quod illum ex maiores explicabo magni quis deleniti in blanditiis ratione sunt corporis iure fugiat doloremque velit eveniet doloribus iste incidunt magnam molestiae libero enim, minus et. Possimus maxime nisi distinctio consequuntur quaerat, officia ad doloribus fugit error blanditiis illo minima qui ex. Commodi vel quia,

aliquid ducimus ad tenetur. Rem dolore veritatis labore suscipit necessitatibus? Inventore aperiam et, laboriosam totam molestiae obcaecati assumenda nobis. Corporis repellat minima quasi nesciunt iusto, impedit in porro laborum veritatis sunt nostrum architecto rerum explicabo! --}}