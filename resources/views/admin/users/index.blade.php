@extends('layouts.master')

@section('title','Funda Web App | All Users')

@section('content')

<div class="container-fluid px-4">
  <div class="card mt-4">
    <div class="card-header">
       <h4 class="mt-4">All Users</h4>
    </div>
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="card-body">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)  
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            {{-- <td><img src="{{ asset('uploads/category/'.$category->image ) }}" height="30px" width="30px" alt="Category Image"/></td> --}}
            <td>{{$user->role == 0 ? 'user' : 'admin'}}</td>
            <td>
                <a href="" class="btn btn-success">Edit</a>
                {{-- <a href="{{ route('admin.deletecategory',$category->id) }}" class="btn btn-danger">Delete</a> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
</div>


@endsection