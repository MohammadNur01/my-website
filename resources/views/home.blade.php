@extends('layouts.main')

@section('container')
<header class="bg-dark py-5 rounded mb-4">
    <div class="px-5">
            @foreach ($homes as $h)
            <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                            <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2"> {{ $h->heading }}</h1>
                                    <span class="email text-white mb-3">{{ $h->sub }}</span>
                                    <p class="lead text-white-50 mb-4">{{ $h->body }}</p>
                            </div>
                    </div>
            </div>
            @endforeach
    </div>
</header>
@endsection
        
