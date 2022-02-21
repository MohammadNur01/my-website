@extends('layouts.main')

@section('container')
<main class="container portfolio" id="portfolio">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="port-preview">
                <h2 class="port-title mb-3" >{{ $portfolio->title }}</h2>
                <small class="text-muted">
                  <p class="text-decoration-none mb-3">Made on {{ $portfolio->created_at->diffForHumans() }}
                </small>
                <img class="card-img-top rounded" src="https://source.unsplash.com/500x400?computers" alt="Card image cap">
                <p class="port-body fs-5 my-3">{!! $portfolio->body !!}</p>
            </div>
        </div>
    </div>
</main>

@endsection

        
