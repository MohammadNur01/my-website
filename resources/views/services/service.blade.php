@extends('layouts.main')

@section('container')
<main class="container portfolio" id="portfolio">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="port-preview">
                <h2 class="port-title" >{{ $service->name }}</h2>
                <img class="card-img-top rounded" src="https://source.unsplash.com/1200x400?developments" alt="Card image cap">
                <p class="port-body">{!! $service->body !!}</p>
            </div>
        </div>
    </div>
</main>

@endsection

        
