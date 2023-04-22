@extends('layouts.front')

@section('title')
{{$blog->name}} | Law Office of Zaidi and Moersdorf, LLP
@endsection

@section('metatags')
{{$blog->meta_tag}}
@endsection

@section('contents')

<!-- Page Header Start -->
<div class="container-fluid bg-primary py-3 bg-header" data-aos="zoom-in"
data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white animated zoomIn">{{$blog->name}}</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Details</a>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Details Start -->
<div class="container-fluid bg-white text-dark py-6 px-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 mx-auto" style="min-height: 300px;">
                <div class="position-relative h-100" data-aos="fade-down"
                data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                    <img class="position-absolute w-100 h-100" src="{{asset('/upload/blog/'.$blog->image)}}" style="object-fit: cover; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                </div>
            </div>
            <div class="col-lg-12 py-6 px-2 text-center"  data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                <h1 class="display-5 mb-4 text-dark">{{$blog->name}}</h1>
                <p class="text-dark" style="color:rgb(0, 0, 0) !important">
                    {!! $blog->description !!}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Details End -->



@endsection