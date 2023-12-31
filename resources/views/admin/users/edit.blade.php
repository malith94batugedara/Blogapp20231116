@extends('layouts.master')

@section('title','Funda Web App | Edit User')

@section('content')

<div class="container-fluid px-4">
   
     <div class="card mt-4">
         <div class="card-header">
             <h4>Edit User <a href="{{ route('admin.users') }}" class="btn btn-primary float-end">View Users</a></h4>
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                      <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
               {{-- <form action="{{ route('admin.updatepost',$post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" required class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach( $category as $catitem )
                            <option value="{{$catitem->id}}" {{ $post->category_id == $catitem->id ? 'selected' : ''}}>{{$catitem->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Post Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $post->name }}" placeholder="Type Post Name"/>
                    </div>
                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $post->slug }}" placeholder="Type Slug Name"/>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" id="my_summernote" class="form-control" rows="6">{!! $post->description !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control" value="{{ $post->yt_iframe }}" placeholder="Type Youtube Link"/>
                    </div>
                    <h6>SEO Tags</h6><br/>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $post->meta_title }}" placeholder="Type Meta Title"/>
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">{!! $post->meta_description !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keyword" class="form-control" value="{{ $post->meta_keyword }}" placeholder="Type Meta Keyword"/>
                    </div>
                    <h6>Status Mode</h6><br/>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" {{ $post->status == 1 ? 'checked' : '' }}/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="submit" value="Update Post" class="btn btn-success"/>
                        </div>
                    </div>
               </form> --}}
               <div class="mb-3">
                <label>Full Name</label>
                <p class="form-control">{{$user->name}}</p>
               </div>
               <div class="mb-3">
                <label>Email</label>
                <p class="form-control">{{$user->email}}</p>
               </div>
               <div class="mb-3">
                <label>Created_at</label>
                <p class="form-control">{{$user->created_at->format('d/m/Y')}}</p>
               </div>
               <form action="{{ route('admin.userupdate',$user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="1" {{ $user->role == 1 ? 'selected' : ''}}>Admin</option>
                        <option value="0" {{ $user->role == 0 ? 'selected' : ''}}>User</option>
                        <option value="2" {{ $user->role == 2 ? 'selected' : ''}}>Blogger</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Update User Role" class="btn btn-success"/>  
                </div>
               </form>
         </div>
     </div>

</div>
@endsection