@extends('layouts.admin')
@section('title')
Edit Blog | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')


<!-- blog Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Edit Blog</h1>
</div>
<hr>
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
<!-- Content Row -->
<div class="row">
    <div class="col-10 m-auto">
        <!-- DataTales Example -->
        <div class="card bg-light shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Blog Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-blog/'.$blog->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name"> <b>Name<span class="text-danger">*</span></b> </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$blog->name}}" required>
                        <span class="text-danger">
                            @error('name')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                        <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required>{{$blog->description}}</textarea>
                        <span class="text-danger">
                            @error('description')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>   
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="meta_tag" class="form-label"><b>Metatags</b></label>
                        <input type="text" class="form-control" name="meta_tag" value="{{$blog->meta_tag}}">  
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="slug"> <b>Slug</b> </label>
                        <input type="text" name="slug" class="form-control" value="{{$blog->slug}}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <br>
                        <img src="{{asset('upload/blog/'.$blog->image)}}" alt="" height="150px" width="220px">
                    </div>
                    <br>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
