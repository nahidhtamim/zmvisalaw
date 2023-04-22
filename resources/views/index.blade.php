@extends('layouts.front')

@section('title')
Home | Law Office of Zaidi and Moersdorf, LLP
@endsection

@section('metatags')
{{$home_metatag->meta_tag}}
@endsection

@section('contents')

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner"  data-aos="zoom-in"
        data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
            @foreach ($sliders as $slider)
            <div class="carousel-item @if($slider->id =='1') active @endif">
                <img class="w-100" src="{{asset('upload/slider/'.$slider->image)}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 100%;">
                        <h5 class="text-uppercase">{{$slider->line_one}}</h5>
                        <h1 class="display-1 text-primary mb-md-4">{{$slider->line_two}}</h1>
                        <a href="{{url('/contact')}}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid bg-secondary p-0 text-dark">
    <div class="container">
        <div class="row g-0">
            <div class="col-12 py-6 px-5 text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
                <h1 class="display-5 mb-4 text-dark">Welcome To Law Office of <br><span class="text-primary">Zaidi and Moersdorf, LLP</span></h1>
                <h4 class="text-dark mb-4"> {{$about->line_one}}</h4>
                <p class="text-dark">{!! $about->description !!}</p>
            </div>
        </div>
    </div>

</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-6 px-5">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 mx-auto text-dark">
                    <a href="{{url('/our-services/'.$service->slug)}}">
                        <div class="service-item bg-primary text-center px-3" style="min-height: 350px;" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                            <div class="d-flex align-items-center justify-content-center bg-dark text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="{{$service->fontawesome}} fa-2x"></i>
                            </div>
                            <h3 class="mb-3 text-white">{{$service->name}}</h3></a>     
                            <p class="mb-0 text-white">{!! substr($service->description, 0, 80)."......" !!}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>
<!-- Services End -->

<!-- Testimonial Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100" data-aos="zoom-out-right" data-aos-easing="linear" data-aos-duration="800">
                    <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/testimonial.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5 text-dark"  data-aos="zoom-out-left" data-aos-easing="linear" data-aos-duration="800">
                <h1 class="display-5 mb-4 text-dark">Testimonials</h1>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($reviews as $review)
                    <div class="testimonial-item pb-3">
                        <p class="fs-4 mb-4 text-primary" style="color: black !important!"><i class="fa fa-quote-left text-primary me-3"></i>{!! $review->description !!}</p>
                        <div class="d-flex align-items-center">
                            @if($review->image != null)
                            <img class="img-fluid rounded-circle" src="{{asset('upload/review/'.$review->image)}}" alt="{{$review->name}}">
                            @endif
                            <div class="ps-1">
                                <h5 class="text-dark"> <b>- {{$review->name}}</b> </h5>
                                @if($review->image != null)
                                <small class="text-dark">{{$review->occupation}}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <small class="text-danger text-center">Names have been changed to protect client confidentiality</small>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Features Start -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="180" height="180"
                viewBox="0 0 100 100" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="800">
                <path fill="#ee3e54" d="M13,27c-1.105,0-2,0.895-2,2s0.895,2,2,2s2-0.895,2-2S14.105,27,13,27z"></path><path fill="#f1bc19" d="M77,12c-0.552,0-1,0.448-1,1s0.448,1,1,1s1-0.448,1-1S77.552,12,77,12z"></path><path fill="#fce0a2" d="M50,13c-20.435,0-37,16.565-37,37s16.565,37,37,37s37-16.565,37-37S70.435,13,50,13z"></path><path fill="#f1bc19" d="M83,11c-2.209,0-4,1.791-4,4s1.791,4,4,4s4-1.791,4-4S85.209,11,83,11z"></path><path fill="#ee3e54" d="M87,22c-1.105,0-2,0.895-2,2s0.895,2,2,2s2-0.895,2-2S88.105,22,87,22z"></path><path fill="#fbcd59" d="M81,74c-1.105,0-2,0.895-2,2s0.895,2,2,2s2-0.895,2-2S82.105,74,81,74z M15,59c-2.209,0-4,1.791-4,4 c0,2.209,1.791,4,4,4s4-1.791,4-4C19,60.791,17.209,59,15,59z"></path><path fill="#ee3e54" d="M25,85c-1.105,0-2,0.895-2,2s0.895,2,2,2s2-0.895,2-2S26.105,85,25,85z"></path><path fill="#fff" d="M18.5,51c-1.381,0-2.5,1.119-2.5,2.5s1.119,2.5,2.5,2.5s2.5-1.119,2.5-2.5S19.881,51,18.5,51z"></path><path fill="#f1bc19" d="M21,66c-0.552,0-1,0.448-1,1s0.448,1,1,1s1-0.448,1-1S21.552,66,21,66z"></path><path fill="#fff" d="M80,33c-0.552,0-1,0.448-1,1s0.448,1,1,1s1-0.448,1-1S80.552,33,80,33z"></path><path fill="#77cbd2" d="M50,25.625c-13.393,0-24.25,10.857-24.25,24.25S36.607,74.125,50,74.125s24.25-10.857,24.25-24.25 S63.393,25.625,50,25.625z"></path><path fill="#472b29" d="M50,74.825c-13.757,0-24.95-11.192-24.95-24.95S36.243,24.925,50,24.925s24.95,11.192,24.95,24.95 S63.757,74.825,50,74.825z M50,26.325c-12.985,0-23.55,10.564-23.55,23.55S37.015,73.425,50,73.425s23.55-10.564,23.55-23.55 S62.985,26.325,50,26.325z"></path><path fill="#472b29" d="M40.022,67.429c0.151-0.151,0.39-0.193,0.588-0.088c0.265,0.141,0.533,0.274,0.804,0.402 c1.051,0.496,2.153,0.9,3.28,1.201c0.267,0.07,0.426,0.345,0.354,0.612c-0.069,0.269-0.345,0.426-0.612,0.354 c-1.184-0.316-2.345-0.741-3.449-1.262c-0.285-0.135-0.566-0.275-0.845-0.424c-0.244-0.129-0.337-0.432-0.207-0.677 C39.958,67.502,39.988,67.463,40.022,67.429z"></path><path fill="#472b29" d="M35.283,35.221c8.14-8.14,21.363-8.159,29.478-0.044s8.095,21.338-0.045,29.477 c-4.225,4.225-10.065,6.445-16.022,6.09c-0.45-0.027-0.9-0.069-1.348-0.124c-0.274-0.035-0.467-0.284-0.434-0.557 c0.033-0.276,0.284-0.469,0.559-0.434c0.426,0.053,0.855,0.091,1.283,0.117c5.672,0.338,11.234-1.776,15.257-5.798 c7.749-7.749,7.769-20.339,0.044-28.064S43.74,28.179,35.99,35.928s-7.769,20.339-0.044,28.064 c0.704,0.704,1.464,1.358,2.259,1.945c0.221,0.163,0.269,0.477,0.105,0.699c-0.169,0.227-0.477,0.269-0.699,0.105 c-0.834-0.616-1.633-1.303-2.372-2.042C27.125,56.584,27.144,43.36,35.283,35.221z"></path><path fill="#fff" d="M55,57H42c-2.761,0-5-2.239-5-5v-8h13c2.761,0,5,2.239,5,5V57z"></path><polygon fill="#fff" points="63,57 57,53 57,48 63,44"></polygon><polyline fill="none" stroke="#472b29" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".5" points="37,47 37,44 44,44"></polyline><path fill="#472b29" d="M46,57.25h-4c-2.895,0-5.25-2.355-5.25-5.25v-3c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25 v3c0,2.619,2.131,4.75,4.75,4.75h4c0.138,0,0.25,0.112,0.25,0.25S46.138,57.25,46,57.25z"></path><path fill="#472b29" d="M50,57.25h-2c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h2c0.138,0,0.25,0.112,0.25,0.25 S50.138,57.25,50,57.25z"></path><path fill="#472b29" d="M55,57.25h-3c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h2.75V49 c0-2.619-2.131-4.75-4.75-4.75h-4c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h4c2.895,0,5.25,2.355,5.25,5.25v8 C55.25,57.138,55.138,57.25,55,57.25z"></path><path fill="#472b29" d="M59,54.583c-0.048,0-0.096-0.014-0.139-0.042l-2-1.333C56.792,53.162,56.75,53.083,56.75,53v-5 c0-0.083,0.042-0.162,0.111-0.208l6-4c0.078-0.051,0.175-0.056,0.257-0.012c0.081,0.043,0.132,0.128,0.132,0.22v3 c0,0.138-0.112,0.25-0.25,0.25s-0.25-0.112-0.25-0.25v-2.533l-5.5,3.667v4.732l1.889,1.259c0.115,0.077,0.146,0.232,0.069,0.347 C59.16,54.544,59.081,54.583,59,54.583z"></path><path fill="#472b29" d="M63,57.25c-0.048,0-0.097-0.014-0.139-0.042l-2-1.333c-0.115-0.077-0.146-0.232-0.069-0.347 c0.077-0.116,0.233-0.145,0.347-0.069l1.611,1.074V49c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25v8 c0,0.092-0.051,0.177-0.132,0.22C63.081,57.24,63.041,57.25,63,57.25z"></path>
                </svg>
            </div>
            <div class="col-lg-6 text-center">
                <div class="row g-5">
                    <div class="col-12 pt-4" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="800">
                        <h1 class="display-5">To Schedule A Video Consultation email info@zmvisalaw.com</h1>
                        {{-- <p class="mb-0 text-white">You can reach us via ZOOM or Google MEET</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="180" height="180"
                viewBox="0 0 100 100" data-aos="flip-right" data-aos-easing="linear" data-aos-duration="800">
                <circle cx="13" cy="29" r="2" fill="#ee3e54"></circle><circle cx="77" cy="13" r="1" fill="#f1bc19"></circle><circle cx="50" cy="50" r="37" fill="#fce0a2"></circle><circle cx="83" cy="15" r="4" fill="#f1bc19"></circle><circle cx="87" cy="24" r="2" fill="#ee3e54"></circle><circle cx="81" cy="76" r="2" fill="#fbcd59"></circle><circle cx="15" cy="63" r="4" fill="#fbcd59"></circle><circle cx="25" cy="87" r="2" fill="#ee3e54"></circle><circle cx="18.5" cy="53.5" r="2.5" fill="#fff"></circle><circle cx="21" cy="67" r="1" fill="#f1bc19"></circle><circle cx="80" cy="34" r="1" fill="#fff"></circle><g><path fill="#93bc39" d="M76.412,34.888v30.267c0,1.718-2.024,2.637-3.317,1.505l-7.683-6.722V40.061l7.688-6.682 C74.394,32.254,76.412,33.173,76.412,34.888z"></path><polygon fill="#6f913d" points="65.412,59.035 55.218,50.224 54.959,50 55.218,49.776 65.412,40.965"></polygon><path fill="#fbb821" d="M54.824,50v-8.824H37.176l-0.294-0.265V30.882l-0.147-0.147l0.147-0.147h25.588 c1.624,0,2.941,1.318,2.941,2.941v7.435l-10.194,8.812L54.959,50H54.824z"></path><path fill="#93bc39" d="M54.824,58.824V50h0.135l10.453,9.035v7.435c0,1.624-1.318,2.941-3.529,2.941h-25v-0.294v-10 l0.294-0.294H54.824z"></path><polygon fill="#4792dd" points="37.176,41.176 37.176,58.824 36.882,59.118 26.882,59.118 26.588,59.118 26.588,40.912 36.882,40.912"></polygon><path fill="#1e65d6" d="M36.882,69.118v0.294h-7.941c-1.035,0-2.353-1.318-2.353-2.353v-7.941h0.294h10V69.118z"></path><polygon fill="#f45834" points="36.882,30.882 36.882,40.912 26.588,40.912 26.588,40.882 36.735,30.735"></polygon><path fill="#472b29" d="M54,42v16H38V42H54 M54,40.6H38c-0.773,0-1.4,0.627-1.4,1.4v16c0,0.773,0.627,1.4,1.4,1.4h16 c0.773,0,1.4-0.627,1.4-1.4V42C55.4,41.227,54.773,40.6,54,40.6L54,40.6z"></path><path fill="#472b29" d="M62.471,31.4c1.174,0,2.129,0.955,2.129,2.129v32.941c0,1.294-1.067,2.129-2.718,2.129H28.941 c-0.605,0-1.541-0.936-1.541-1.541v-25.84l9.819-9.819H62.471 M62.471,30H36.882c-0.156,0-0.306,0.062-0.416,0.172L26.172,40.466 C26.062,40.576,26,40.726,26,40.882v26.177C26,68.433,27.566,70,28.941,70h32.941C64.306,70,66,68.549,66,66.471V33.529 C66,31.583,64.417,30,62.471,30L62.471,30z"></path><path fill="#472b29" d="M74.718,67.77c-0.542,0-1.068-0.197-1.482-0.555l-8.364-7.203l0.914-1.061l8.364,7.203 c0.263,0.226,0.625,0.278,0.937,0.133c0.323-0.148,0.514-0.446,0.514-0.799V34.511c0-0.353-0.191-0.65-0.513-0.799 c-0.319-0.146-0.671-0.098-0.938,0.134l-8.365,7.202l-0.913-1.061l8.364-7.202c0.682-0.59,1.617-0.722,2.437-0.346 C76.491,32.818,77,33.611,77,34.511v30.978c0,0.901-0.509,1.694-1.328,2.07C75.372,67.698,75.049,67.77,74.718,67.77z"></path></g><g><path fill="#472b29" d="M37.1,69.75c-0.276,0-0.5-0.224-0.5-0.5V30.738c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5V69.25 C37.6,69.526,37.376,69.75,37.1,69.75z"></path></g><g><path fill="#472b29" d="M53.313,41.6H26.936c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h26.377 c0.276,0,0.5,0.224,0.5,0.5S53.589,41.6,53.313,41.6z"></path></g><g><path fill="#472b29" d="M53.313,59.4H26.936c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h26.377 c0.276,0,0.5,0.224,0.5,0.5S53.589,59.4,53.313,59.4z"></path></g><g><path fill="#472b29" d="M65.938,60.313c-0.116,0-0.231-0.04-0.326-0.121l-11.428-9.813c-0.11-0.095-0.174-0.232-0.174-0.378 s0.063-0.284,0.173-0.379l11.053-9.563c0.209-0.182,0.525-0.158,0.705,0.051c0.181,0.209,0.158,0.524-0.051,0.705l-10.614,9.184 l10.988,9.435c0.209,0.18,0.233,0.495,0.054,0.705C66.218,60.253,66.078,60.313,65.938,60.313z"></path></g><g><path fill="#472b29" d="M59.75,66h-4.942c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h4.942 c0.965,0,1.75-0.785,1.75-1.75v-3.915c0-0.138,0.112-0.25,0.25-0.25S62,59.697,62,59.835v3.915C62,64.99,60.991,66,59.75,66z M52.808,66h-2c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h2c0.138,0,0.25,0.112,0.25,0.25S52.946,66,52.808,66z M48.808,66h-0.5c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h0.5c0.138,0,0.25,0.112,0.25,0.25S48.946,66,48.808,66z"></path></g><g><path fill="#472b29" d="M61.75,39.915c-0.138,0-0.25-0.112-0.25-0.25V35.75c0-0.965-0.785-1.75-1.75-1.75h-7.942 c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h7.942c1.241,0,2.25,1.01,2.25,2.25v3.915 C62,39.803,61.888,39.915,61.75,39.915z M49.808,34h-2c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h2 c0.138,0,0.25,0.112,0.25,0.25S49.946,34,49.808,34z M45.808,34h-5.835c-0.138,0-0.25-0.112-0.25-0.25s0.112-0.25,0.25-0.25h5.835 c0.138,0,0.25,0.112,0.25,0.25S45.946,34,45.808,34z"></path></g>
                </svg>
            </div>
        </div>
    </div>

</div>
<!-- Features Start -->

<!-- Blog Start -->
<div class="container-fluid bg-secondary py-6 px-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0 text-dark">Latest Blog Post</h1>
            <hr class="w-25 mx-auto bg-dark">
        </div>
        <div class="row g-5">
            <div class="owl-carousel  owl-theme blog-carousel">
                @foreach ($blogs as $blog)
                <div class="blog-item px-2" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('upload/blog/'.$blog->image)}}" alt="">
                    </div>
                    <div class="bg-dark d-flex">
                        {{-- <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span class="text-dark">{{$blog->created_at}}</span>
                        </div> --}}
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <a class="h3" href="{{url('/blog-details/'.$blog->slug)}}"> <b>{{$blog->name}}</b> </a>
                            <p class="text-white" style="color: white !important;">{!! substr($blog->description, 0, 80)."......" !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="col-lg-4 col-md-6 mx-auto">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('upload/blog/'.$blog->image)}}" alt="">
                    </div>
                    <div class="bg-dark d-flex">
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <a class="h3" href="{{url('/blog-details/'.$blog->slug)}}"> <b>{{$blog->name}}</b> </a>
                            <p class="text-white" style="color: white !important;">{!! substr($blog->description, 0, 80)."......" !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection