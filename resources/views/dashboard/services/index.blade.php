@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Service</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/services/create" class="btn btn-dark m-3 mt-1 ml-1">Create New Service</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Excerpt</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($services as $service)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->excerpt }}</td>
            <td>
                <a href="/dashboard/services/{{ $service->slug }}"><span data-feather="eye" class="badge bg-info"></span>
                </a>
                <a href=""><span data-feather="edit" class="badge bg-warning"></span>
                </a>
                <a href=""><span data-feather="x-circle" class="badge bg-danger"></span>
                </a>
            </td>
          </tr>
          @endforeach
        
      </tbody> 
    </table>
  </div>
@endsection