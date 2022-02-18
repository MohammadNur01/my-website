
@extends('layouts.main') 

@section('container')
<div class="nav-scroller p-0 mb-2 ">
  <nav class="nav d-flex justify-content-between bg-dark bg-opacity-75">
    @foreach ($categories as $category)
    <a class="p-2 link-light" style="text-decoration: none" href="/posts/categories/{{ $category->slug }}">{{ $category->name }}</a>
    @endforeach
  </nav>
</div>

  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gxlg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7 px-0">
        <img width="600" class="rounded" src="/img/posts/{{ $post->image }}" alt="/img/posts/{{ $post->image }}">
        <h2 class="post-title fw-bold">{{ $post->title }}</h2>
        <h6 class="">Writed by <a href="/about" style="text-decoration: none">{{ $post->user->name }}</a> in <a href="">{{ $post->category->name }}</a> </h6>
        {!! $post->body !!}
      </div>
    </div>
    
  </div>


<a href="/posts" class="btn btn-dark p-1 mb-5">Back to Posts</a>
@endsection

