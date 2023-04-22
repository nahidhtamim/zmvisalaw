@extends('layouts.admin')
@section('title')
Edit Slider | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')


<!-- blog Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Edit Slider</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Slider Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-slider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="line_one"> <b>Line One<span class="text-danger">*</span></b> </label>
                        <input type="text" name="line_one" class="form-control @error('line_one') is-invalid @enderror" value="{{$slider->line_one}}" required>
                        <span class="text-danger">
                            @error('line_one')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="line_two"> <b>Line Two<span class="text-danger">*</span></b> </label>
                            <input type="text" name="line_two" class="form-control @error('line_two') is-invalid @enderror" value="{{$slider->line_two}}" required>
                            <span class="text-danger">
                                @error('line_two')
                                    <p class="text-danger">{{$message}}</p> 
                                @enderror
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="image"> <b>Image</b> <sup>[Size: To maintain the design, please use image of same
                                size
                                ]</sup></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <br>
                        <img src="{{asset('upload/slider/'.$slider->image)}}" alt="" height="150px" width="220px">
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
