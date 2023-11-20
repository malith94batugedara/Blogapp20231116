@extends('layouts.master')

@section('title','Funda Web App | All Categories')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-4">
    <div class="card-header">
       <h4 class="mt-4">All Categories <a href="{{ route('admin.addcategory') }}" class="btn btn-success float-end">Add Category</a></h4>
    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="card-body">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)  
          <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td><img src="{{ asset('uploads/category/'.$category->image ) }}" height="30px" width="30px" alt="Category Image"/></td>
            <td>{{$category->status == 0 ? 'shown' : 'hidden'}}</td>
            <td>
                <a href="{{ route('admin.editcategory',$category->id) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('admin.deletecategory',$category->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
</div>


@endsection