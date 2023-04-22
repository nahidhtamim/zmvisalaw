<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary p-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 text-center">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="{{url('/')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="{{url('/about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-secondary mb-2" href="{{url('/attorney-bios')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Attorney Bios</a>
                    <a class="text-secondary" href="{{url('/contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>10617 Jones St., Suite 301-B, Fairfax, VA, 22030</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@zmvisalaw.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>(347) 451-3408</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex" style="justify-content: center;">
                    @foreach($socials as $social)
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="@if($social->link != null) {{$social->link}} @else # @endif"><i class="{{$social->fontawesome}} fw-normal"></i></a>
                    @endforeach
                    {{-- <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram fw-normal"></i></a> --}}
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid bg-primary text-dark text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="container">
        <p class="m-0">&copy; <a class="text-dark border-bottom" href="#" style="text-decoration: none;">ZMVISALAW</a>. 
            All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://htgroupca.com"  style="text-decoration: none;">HTGroup</a></p>
    </div>
</div>
<!-- Footer End -->