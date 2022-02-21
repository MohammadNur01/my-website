
@extends('layouts.main') 

@section('container')
<div class="nav-scroller p-0 mb-2 ">
  <nav class="nav d-flex justify-content-between bg-dark bg-opacity-75">
    @foreach ($categories as $category)
    <a class="p-2 link-light" style="text-decoration: none" href="/posts/categories/{{ $category->slug }}">{{ $category->name }}</a>
    @endforeach
  </nav>
</div>

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h2 class="post-title fw-bold mb-3">{{ $post->title }}</h2>
        <h6 class="">Writed by <a href="/authors/{{ $post->author->username }}" style="text-decoration: none">{{ $post->author->name }}</a> in <a href="">{{ $post->category->name }}</a> </h6>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
       
      </div>
    </div>
    
  </div>


<a href="/posts" class="btn btn-dark p-1 mb-5">Back to Posts</a>
@endsection

