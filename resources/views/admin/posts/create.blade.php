@extends('layouts.master')

@section('title','Funda Web App | Add Post')

@section('content')

<div class="container-fluid px-4">
   
     <div class="card mt-4">
         <div class="card-header">
             <h4>Add Post <a href="{{ route('admin.posts') }}" class="btn btn-primary float-end">View Posts</a></h4>
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                      <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
               <form action="{{ route('admin.addpost') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach( $category as $catitem )
                            <option value="{{$catitem->id}}">{{$catitem->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Post Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Type Post Name"/>
                    </div>
                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Type Slug Name"/>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" id="my_summernote" class="form-control" rows="6"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control" placeholder="Type Youtube Link"/>
                    </div>
                    <h6>SEO Tags</h6><br/>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" placeholder="Type Meta Title"/>
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keyword" class="form-control" placeholder="Type Meta Keyword"/>
                    </div>
                    <h6>Status Mode</h6><br/>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status"/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="submit" value="Save Post" class="btn btn-success"/>
                        </div>
                    </div>
               </form>
         </div>
     </div>

</div>
@endsection