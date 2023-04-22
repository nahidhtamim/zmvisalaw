@extends('layouts.admin')
@section('title')
Edit Service | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')


<!-- Page Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Edit Service</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Service Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-service/'.$service->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="fontawesome"> <b>Font Awesome<span class="text-danger">*</span></b>  <br> 
                            <small class="text-danger">Please Use an Icon from this website <a href="https://fontawesome.com/search?o=r&m=free"> <i class="fa fa-globe"></i> </a>, see the video below on how to use the icon</small> 
                        </label>
                        <input type="text" name="fontawesome" class="form-control @error('fontawesome') is-invalid @enderror" value="{{$service->fontawesome}}" required>
                        <span class="text-danger">
                            @error('fontawesome')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name"> <b>Name<span class="text-danger">*</span></b> </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$service->name}}" required>
                        <span class="text-danger">
                            @error('name')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                        <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required>{{$service->description}}</textarea>
                        <span class="text-danger">
                            @error('description')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>   
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="meta_tag"><b>Metatags</b> </label>
                        <input type="text" name="meta_tag" class="form-control" value="{{$service->meta_tag}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="slug"> <b>Slug</b> </label>
                        <input type="text" name="slug" class="form-control" value="{{$service->slug}}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <br>
                        <img src="{{asset('upload/service/'.$service->image)}}" alt="" height="150px" width="220px">
                    </div>
                    <br>
                    <div class="form-group text-right">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                    <br>
                    <div class="form-group text-right">
                        <video autoplay muted loop playsinline="" id="bg-video" width="100%" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                            <source src="{{ asset('admin/img/how to add icon.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
