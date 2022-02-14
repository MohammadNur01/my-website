@extends('layouts.main')

@section('container')
<main class="container portfolio" id="portfolio">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="port-preview">
                <h2 class="port-title" >{{ $portfolio->title }}</h2>
                <img class="card-img-top rounded" src="/img/{{ $portfolio->image }}" alt="Card image cap">
                <p class="port-body">{!! $portfolio->body !!}</p>
            </div>
        </div>
    </div>
  </div>
</main>

@endsection

        
