@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Portfolio</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/dashboard/portfolios/create" class="btn btn-dark m-3 mt-1 ml-1">Create New Portfolio</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($portfolios as $portfolio)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $portfolio->title }}</td>
            <td>
                <a href="/dashboard/portfolios/{{ $portfolio->slug }}" class="badge bg-info"><span data-feather="eye" ></span>
                </a>
                <a href="/dashboard/portfolios/{{ $portfolio->slug }}/edit" class="badge bg-warning"><span data-feather="edit" ></span>
                </a>
                <form action="/dashboard/portfolios/{{ $portfolio->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form> 
            </td>
          </tr>
          @endforeach
        
      </tbody> 
    </table>
  </div>
@endsection