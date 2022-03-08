@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
      <div class="col-lg-8">
        <h2 class="port-title fw-bold mb-3">{{ $portfolio->title }}</h2>
        <a href="/dashboard/portfolios" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my Portfolio
        </a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit 
        </a>
        <form action="/dashboard/portfolios/{{ $portfolio->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
        </form>
        <img src="https://source.unsplash.com/1200x400?computer" class="card-img-top mt-3" alt="" class="img-fluid">

        <article class="my-3 fs-5">
          {!! $portfolio->body !!}
        </article>
       
      </div>
    </div>
    
  </div>
@endsection