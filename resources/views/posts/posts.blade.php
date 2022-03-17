
@extends('layouts.main')

@section('container')
    <div class="nav-scroller p-0 mb-2 ">
      <nav class="nav d-flex justify-content-between bg-dark bg-opacity-75">
        @foreach ($categories as $category)
        <a class="p-2 link-light" style="text-decoration: none" href="/posts?category={{ $category->slug }}">{{ $category->name }}</a>
        @endforeach
      </nav>
    </div>
    
  <main class="container">
    
<h1 class="mb-3">{{ $title }}</h1>

<hr>

@if ($posts->count())
  <div class="card mb-3">
    @if ($posts[0]->image)
      <div style="max-height: 400px; overflow:hidden;">
        <img src="{{ asset('storage/'. $posts[0]->image) }}" class="card-img-top img-fluid" alt="{{ $posts[0]->category->name }}">
      </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
    
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
          Writed by
          <a style="text-decoration: none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">Read more</a>
    </div>
  </div>

    

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a class=" text-white text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
        @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
        @else
        <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        @endif
       
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <small class="text-muted">
            Writed by
            <a style="text-decoration: none" href="/posts?authors={{ $post->author->username }}">{{ $post->author->name }}</a> in {{ $post->created_at->diffForHumans() }}
          </small>
          <p class="card-text fs-5">{{ $post->excerpt }}.</p>
          <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-dark">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
    <div class="d-flex justify-content-end mb-4">{{ $posts->links() }}</div>
  
  </main>
@else
  <p class="text-center fs-4">No Posts Found!</p>
@endif
@endsection