@extends('layouts.master')

@section('title','Funda Web App | All Posts')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-4">
    <div class="card-header">
    <h4 class="mt-4">All Posts <a href="{{ route('admin.addpost') }}" class="btn btn-success float-end">Add Post</a></h4>
    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category</th>
            <th scope="col">Post Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->status == 1 ? 'hidden' : 'shown' }}</td>
            <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</div>


@endsection