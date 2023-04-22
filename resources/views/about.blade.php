@extends('layouts.front')

@section('title')
About | Law Office of Zaidi and Moersdorf, LLP
@endsection

@section('metatags')
{{$about_metatag->meta_tag}}
@endsection

@section('contents')

<!-- Page Header Start -->
<div class="container-fluid bg-primary py-3 bg-header" data-aos="zoom-in"
data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
    <div class="row py-5" >
        <div class="col-12 text-center">
            <h1 class="display-4 text-white animated zoomIn">About Us</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">About Us</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid bg-secondary p-0 text-dark">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;" data-aos="fade-down"
            data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('upload/about/'.$about->image)}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                <h1 class="display-5 mb-4 text-dark">About Us</h1>
                <h4 class="text-dark mb-4"> {{$about->line_one}}</h4>
                <p class="text-dark">{!! $about->description !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection