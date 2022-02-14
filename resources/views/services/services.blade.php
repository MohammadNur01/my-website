@extends('layouts.main')

@section('container')
<section id="services" class="services bg-secondary rounded mb-5">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2 class="text-white fw-bold">Our Services</h2>
                <hr style="color: silver;">
                <h3 class="text-white">What I Do?</h3>
                <h5 class="text-white">We provide to make some awesome app, especial for build websites. We use new technology to built this</h5>
                <p class="text-white">Let's choice what you want to build it.</p>
            </div>
        </div>
        <div class="row mb-4">
          @foreach ($services as $service)
            <div class="col-sm-4 p-2">
                <div class="card">
                    <h4 class="text-dark p-2">{{ $service->name }}</h4>
                    <img class="card-img-top rounded" src="/img/{{ $service->image }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">{{ $service->excerpt }}</p>
                    </div>
                    <div class="card-body">
                      <a href="/services/{{ $service->slug }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
          @endforeach
    </div>
  </section>
@endsection
        
