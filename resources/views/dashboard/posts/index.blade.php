@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>


  @if(session()->has('success'))
  <div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
  @endif


  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-dark m-3 mt-1 ml-1">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye" class="btn btn-info"></span>
                </a>
                <a href=""><span data-feather="edit" class="btn btn-warning"></span>
                </a>
                <a href=""><span data-feather="x-circle" class="btn btn-danger"></span>
                </a>
            </td>
          </tr>
          @endforeach
        
      </tbody>
    </table>
  </div>
@endsection

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, saepe? Rem soluta quod error similique commodi perferendis animi unde maxime debitis odio placeat, in dolor porro tempore voluptatibus nemo asperiores repellat distinctio nostrum quos culpa dolorem aspernatur? Numquam omnis corrupti iste ea voluptate, quis molestias autem ipsum aut! Sequi eveniet aliquam non quis veritatis, debitis accusamus. Quidem animi sapiente nam laudantium possimus numquam sequi veritatis, praesentium architecto quasi aliquam voluptatum ex distinctio asperiores incidunt consequuntur eum rem quas
Odio ullam exercitationem atque voluptatem corrupti? Quis a ipsa earum quod eaque at saepe delectus beatae quidem sequi libero ad iure ex corporis tempore facere, id blanditiis non. Atque autem aliquid velit sint veritatis, eum cupiditate modi qui provident rerum! Magni cum voluptates esse ullam et impedit beatae consequatur autem sunt fuga. Officiis corrupti voluptate exercitationem eveniet fugiat iste mollitia obcaecati aliquid deleniti debitis et, laboriosam veritatis explicabo corporis! 
Inventore non ipsa exercitationem mollitia eveniet perferendis deleniti modi maiores doloremque dignissimos, obcaecati possimus voluptatibus et veniam dicta perspiciatis nihil harum fuga porro. Eveniet illo, omnis, temporibus enim, mollitia vitae repudiandae maiores nisi iste quo architecto debitis nobis praesentium! Aperiam tempora nostrum eligendi perspiciatis sequi hic veritatis obcaecati, delectus vitae modi provident voluptates. --}}