
@extends('layouts.main')

@section('container')
    <div class="nav-scroller p-0 mb-2 ">
      <nav class="nav d-flex justify-content-between bg-dark bg-opacity-75">
        @foreach ($categories as $category)
        <a class="p-2 link-light" style="text-decoration: none" href="/posts/categories/{{ $category->slug }}">{{ $category->name }}</a>
        @endforeach
      </nav>
    </div>
    
  <main class="container">
    
<h1 class="mb-3">{{ $title }}</h1>

<hr>

@if ($posts->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
          Writed by
          <a style="text-decoration: none" href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>
@else
  <p class="text-center fs-4">No Posts Found!</p>
@endif
    

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a class=" text-white text-decoration-none" href="/posts/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
        <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <small class="text-muted">
            Writed by
            <a style="text-decoration: none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in {{ $post->created_at->diffForHumans() }}
          </small>
          <p class="card-text fs-5">{{ $post->excerpt }}.</p>
          <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Next Posts →</a></div>
  
  </main>
@endsection