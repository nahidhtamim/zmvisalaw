@extends('layouts.front')

@section('title')
Attorney Bios | Law Office of Zaidi and Moersdorf, LLP
@endsection

@section('metatags')
{{$team_metatag->meta_tag}}
@endsection

@section('contents')

<!-- Page Header Start -->
<div class="container-fluid bg-primary py-3 bg-header" data-aos="zoom-in"
data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white animated zoomIn">Attorney Bios</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Attorney Bios</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-fluid bg-white py-6 px-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 600px;">
            <!-- <h1 class="display-5 mb-0">Our Team Members</h1>
            <hr class="w-25 mx-auto bg-primary"> -->
        </div>
        <div class="row g-5">

            @foreach($teams as $team)
            @if($team->id % 2 != 0)
            <div class="col-12 mx-auto" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" data-aos="zoom-in-right"
            data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                <div class="row">
                    <div class="col-lg-4" style="min-height: 250px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{asset('/upload/team/'.$team->image)}}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-8 px-5 text-dark">
                        <h1 class="display-5 mb-2 text-dark">{{$team->name}}</h1>
                        <h5 class="text-primary mb-2"><i class="fas fa-gavel text-primary"></i> {{$team->occupation}}</h5>
                        <h5 class="text-primary mb-2"><a href="mailto: {{$team->email}}" class="text-primary"><i class="fas fa-envelope-open text-primary"></i> {{$team->email}}</a></h5>
                        <p class="card-text text-dark"> {!! $team->description !!} </p>
                    </div>
                </div>
            </div>
            @elseif($team->id % 2 == 0)
            <div class="col-12 mx-auto" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" data-aos="zoom-in-left"
            data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                <div class="row">
                    <div class="col-lg-8 px-5 text-dark">
                        <h1 class="display-5 mb-2 text-dark">{{$team->name}}</h1>
                        <h5 class="text-primary mb-2"><i class="fas fa-gavel text-primary"></i> {{$team->occupation}}</h5>
                        <h5 class="text-primary mb-2"><a href="mailto: {{$team->email}}" class="text-primary"><i class="fas fa-envelope-open text-primary"></i> {{$team->email}}</a></h5>
                        <p class="card-text text-dark"> {!! $team->description !!} </p>
                    </div>
                    <div class="col-lg-4" style="min-height: 250px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{asset('/upload/team/'.$team->image)}}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->

@endsection