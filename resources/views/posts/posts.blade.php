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
    
    @foreach ($posts as $post)
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
              <!-- Post preview-->
              <div class="post-preview">
                  <a href="/posts/{{ $post->slug }}" style="text-decoration: none">
                      <h2 class="post-title" >{{ $post->title }}</h2>
                      <a href="/posts/categories/{{ $post->category->slug }}" style="text-decoration: none" class="category badge bg-success p-2">{{ $post->category->name }}</a>
                  </a>
                  <h4 class="post-body">{{ $post->excerpt }}</h4>
                  <h6 class="post-meta">
                      Writed by
                      <a style="text-decoration: none" href="/about">{{ $post->user->name }}</a>
                      on {{ $post->created_at }}
                  </h6>
              </div>
              <!-- Divider-->
              <hr class="my-4" />
              <!-- Pager-->
          </div>
      </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
  
  </main>
@endsection