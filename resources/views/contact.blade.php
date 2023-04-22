@extends('layouts.front')

@section('title')
    Contact | Law Office of Zaidi and Moersdorf, LLP
@endsection

@section('metatags')
{{$contact_metatag->meta_tag}}
@endsection

@section('contents')

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-3 bg-header" data-aos="zoom-in"
    data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 mx-auto py-6" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-easing="linear" data-aos-duration="800">
                    <h1 class="display-5 mb-4 text-dark text-center">Contact For Any Queries</h1>
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @elseif(session('warning'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('warning') }}
                    </div>
                    @endif
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <form action="{{route('contact.send')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="form-floating-1" placeholder="John Doe">
                                    <label for="form-floating-1 text-dark" style="color: #333D51 !important">Full Name</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="form-floating-2" placeholder="name@example.com">
                                    <label for="form-floating-2">Email address</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address" id="form-floating-3" placeholder="Address">
                                    <label for="form-floating-3">Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Message" name="content" id="form-floating-4" style="height: 150px"></textarea>
                                    <label for="form-floating-4">Message</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    {!! NoCaptcha::renderJs() !!}
                        
                                    {!! NoCaptcha::display() !!}
                                    <span class="text-danger">
                                        @error('g-recaptcha-response')
                                            <p class="alert alert-danger">{{$message}}</p> 
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Contact End -->

     <!-- Contact Start -->
     <div class="container-fluid bg-secondary px-0">
        <div class="">
            <div class="row g-0">
                <div class="col-lg-6" style="min-height: 350px;">
                    <div class="position-relative h-100" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="border: 2px solid #333D51; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 350px;">
                    <div class="position-relative h-100" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="border: 2px solid #333D51; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Contact End -->


<!-- Contact Start -->
{{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">For More Information Please Contact Us</h1>
        </div>
        <div class="row g-5 mt-5 pb-5 bg-primary" style="border: 2px solid #8E191C; border-radius: 10px;">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @elseif(session('warning'))
                <div class="alert alert-danger" role="alert">
                    {{ session('warning') }}
                </div>
                @endif
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <form action="{{route('contact.send')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <select class="form-select bg-light border-0" style="height: 55px;" name="region">
                                <option selected>Select A Region *</option>
                                <option value="UK">UK</option>
                                <option value="Europe">Europe</option>
                                <option value="North America">North America</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-light border-0" name="subject" placeholder="Subject *"
                                style="height: 55px;">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name*"
                                style="height: 55px;">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-light border-0" name="phone" placeholder="Your Phone *"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-light border-0" name="content" rows="3"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                {!! NoCaptcha::renderJs() !!}
                    
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger">
                                    @error('g-recaptcha-response')
                                        <p class="alert alert-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-dark w-100 py-3" type="submit">Submit Request</button>
                        </div>

                        <div class="col-12">
                            <span class="text-light"> By selecting the "Submit Request" button, your data entered in the contact form will be collected and processed for the purpose of responding to your request.</span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<!-- Contact End -->


@endsection
