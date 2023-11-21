@extends('layouts.master')

@section('title','Funda Web App | Edit Category')

@section('content')

<div class="container-fluid px-4">
   
     <div class="card mt-4">
         <div class="card-header">
             <h4>Edit Category</h4>
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                      <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
               <form action="{{ route('admin.updatecategory',$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label>Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Type Category Name" value="{{ $category->name }}">
                    </div>
                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Type Slug" value="{{ $category->slug }}">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" id="my_summernote" class="form-control" rows="6">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control"/>
                    </div>

                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" placeholder="Type Meta Title" value="{{ $category->meta_title }}">
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">{{ $category->meta_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keyword" class="form-control" placeholder="Type Meta Keyword" value="{{ $category->meta_keyword }}">
                    </div>
                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked' : ''}}/>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox" name="navbar_status" {{ $category->navbar_status == 1 ? 'checked' : ''}}/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="submit" value="Update Category" class="btn btn-success"/>
                        </div>
                    </div>
               </form>
         </div>
     </div>

</div>
@endsection