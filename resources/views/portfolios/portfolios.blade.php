@extends('layouts.main')

@section('container')
<section id="portfolio" class="portfolio bg-secondary rounded pb-4 mb-5">
  <div class="container">
      <div class="row mb-4 pt-4">
          <div class="col text-center">
              <h2 class="text-white">Our Portfolio</h2>
          </div>
      </div>
      <div class="row mb-4">
        @foreach ($portfolios as $port)
          <div class="col-sm-4 p-2">
              <div class="card border-0">
                  <h4 class="text-dark p-2">{{ $port->title }}</h4>
                  <img class="card-img-top rounded-bottom " src="https://source.unsplash.com/500x300?computers" alt="Card image cap">
                  <div class="card-body">
                  <p class="card-text fs-5">{{ $port->excerpt }}</p>
                  </div>
                  <div class="card-body">
                    <a href="/portfolios/{{ $port->slug }}" class="btn btn-primary">Detail</a>
                  </div>
              </div>
          </div>
        @endforeach
  </div>
</section>
@endsection

        
