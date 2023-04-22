@extends('layouts.admin')
@section('title')
Edit MetaTag | Law Office of Zaidi and Moersdorf, LLP
@endsection
@section('contents')


<!-- blog Heading -->
<div class="text-center">
    <h1 class="h3 mb-0 text-gray-800 text-center" >Edit MetaTag</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit MetaTag Item</h6>
            </div>
            <div class="card-body">
                <form action="{{url('update-metatag/'.$metatag->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="page_name"> <b>Page Name<span class="text-danger">*</span></b> </label>
                        <input type="text" name="page_name" class="form-control @error('page_name') is-invalid @enderror" value="{{$metatag->page_name}}" required>
                        <span class="text-danger">
                            @error('page_name')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
                    </div>
                    <br> --}}
                    <div class="form-group">
                        <label for="meta_tag"> <b>Meta Tags<span class="text-danger">*</span></b> </label>
                        <input type="text" name="meta_tag" class="form-control @error('meta_tag') is-invalid @enderror" value="{{$metatag->meta_tag}}" required>
                        <span class="text-danger">
                            @error('meta_tag')
                                <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </span>
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
