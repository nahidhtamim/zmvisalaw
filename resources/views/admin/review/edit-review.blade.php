@extends('layouts.admin')
@section('title')
Edit Review | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')

@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<div class="container-fluid pt-4 px-4">
    <h1>Edit Review</h1>
    <div class="row vh-60 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-10 text-center p-4">
            <form action="{{url('update-review/'.$review->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$review->name}}" required>
                    <span class="text-danger">
                        @error('name')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="occupation" class="form-label"><b>Occupation</b></label>
                    <input type="text" name="occupation" class="form-control" value="{{$review->occupation}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                    <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required>
                        {{$review->description}}
                    </textarea>
                    <span class="text-danger">
                        @error('description')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>   
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image</b> <sup>[Size: To maintain the design, please use image of same size]</sup></label>
                    <input type="file" name="image" class="form-control">
                    <br>
                    <img src="{{asset('upload/review/'.$review->image)}}" alt="" height="150px" width="220px">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- End -->


@endsection
