@extends('layouts.main')

@section('container')
        <header class="bg-dark py-5 rounded mb-4">
                <div class="px-5">
                        <div class="row gx-5 justify-content-center">
                                <div class="col-lg-6">
                                        <div class="text-center my-5">
                                                <img src="/img/{{ $about->image }}" class="img-thumbnail rounded-circle" width="200" alt="">
                                                <h1 class="display-5 fw-bolder text-white mb-2">Im' {{ $about->name }}</h1>
                                                <span class="email text-white mb-3">{{ $about->email }}</span>
                                                <p class="lead text-white-50 mb-4">{{ $about->body }}</p>
                                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/portfolios">View Portfolio</a>
                                                        <a class="btn btn-outline-light btn-lg px-4" href="/posts">Read My Blog</a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </header>
@endsection
        

   