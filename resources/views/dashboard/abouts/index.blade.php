@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About</h1>
</div>

<div class="table-responsive col-lg-10 mb-5">
  <a href="/dashboard/abouts/edit" class="btn btn-dark m-3 mt-1 ml-1">Edit About Us</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Image</th>
          <th scope="col">Body</th>

        </tr>
      </thead>
      <tbody>
          @foreach ($abouts as $about)
          <tr>
            <td>{{ $about->name }}</td>
            <td>{{ $about->email }}</td>
            <td>{{ $about->image }}</td>
            <td>{!! $about->body !!}</td>
          </tr>
          @endforeach
        
      </tbody> 
    </table>
  </div>
@endsection