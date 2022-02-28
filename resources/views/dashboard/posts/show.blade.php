@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
      <div class="col-lg-8">
        <h2 class="post-title fw-bold mb-3">{{ $post->title }}</h2>
        <a href="" class="btn btn-success">Back to all my Post <span data-feather="arrow-left"></span>
        </a>
        <a href="" class="btn btn-warning">Edit <span data-feather="edit"></span>
        </a>
        <a href="" class="btn btn-danger">Delete <span data-feather="x-circle"></span>
        </a>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
       
      </div>
    </div>
    
  </div>
@endsection