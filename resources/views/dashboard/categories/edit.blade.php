@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Categories</h1>
</div>
<div class="col-lg-8 ">
    <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is_invalid @enderror" id="name" name="name" autofocus required value="{{ old('name', $category->name) }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is_invalid @enderror" id="slug" name="slug" required  value="{{ old('slug', $category->slug) }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}  
          </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary mb-auto">Update Category</button>
    </form>
</div>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function(){
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  
 
</script>
@endsection

{{-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti quas eum, ut tenetur alias laudantium odit sit reprehenderit voluptatem, quae consequatur itaque ullam, saepe harum beatae eaque. Sint recusandae architecto ab non veritatis perspiciatis, sequi incidunt omnis vel. Suscipit repellendus qui quod dicta perspiciatis error incidunt vel velit sed.

Molestiae corrupti natus qui, accusamus voluptatibus, quasi nemo, dicta sit esse itaque culpa? Omnis at quod illum tenetur esse, cupiditate, sequi sunt voluptatem maiores fugiat id distinctio veritatis accusamus in consequatur quisquam, repellat quasi natus labore aspernatur magni cumque quae sed? Rerum et iure veniam maiores, at porro ab, officiis corrupti veritatis beatae repellendus impedit? 

Odio facere obcaecati labore ut totam, nisi dignissimos maiores animi reiciendis maxime esse quod nostrum culpa harum quam accusantium atque non ad voluptates deleniti ratione ab quia numquam. Odio nobis, pariatur voluptas debitis neque, nesciunt rem nulla quo culpa deserunt in tempore explicabo placeat dolorem perferendis eum expedita doloremque illum consequatur, quas quos quibusdam reprehenderit! Ratione consequuntur molestiae asperiores illo quos porro mollitia, tempora laboriosam error laudantium velit obcaecati. Blanditiis in, cupiditate soluta expedita sit fuga ratione quasi totam a distinctio hic, perferendis, illo rem accusamus. Natus accusamus saepe tenetur, amet ratione nostrum veritatis quibusdam recusandae! --}}