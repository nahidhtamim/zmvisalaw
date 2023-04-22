@extends('layouts.admin')
@section('title')
Edit About | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')

@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<div class="container-fluid pt-4 px-4">
    <h1>Edit About</h1>
    <div class="row vh-60 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-10 text-center p-4">
            <form action="{{url('update-about/'.$about->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="line_one" class="form-label"><b>Line One <span class="text-danger">*</span></b></label>
                    <input type="text" name="line_one" class="form-control @error('line_one') is-invalid @enderror" value="{{$about->line_one}}" required>
                    <span class="text-danger">
                        @error('line_one')
                            <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><b>Description<span class="text-danger">*</span></b></label>
                    <textarea name="description" class="form-control description @error('description') is-invalid @enderror" id="description" cols="30" rows="5" required>
                        {{$about->description}}
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
                    <img src="{{asset('upload/about/'.$about->image)}}" alt="" height="150px" width="220px">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- End -->


@endsection
