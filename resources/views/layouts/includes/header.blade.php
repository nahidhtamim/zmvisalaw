<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="{{url('/')}}" class="navbar-brand p-0">
        <img src="{{ asset('frontend/img/logo.png')}}" alt="" width="135px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 me-n3">
            <a href="{{url('/')}}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Areas of practice</a>
                <div class="dropdown-menu m-0">
                    @foreach($services as $service)
                        <a href="{{url('/our-services/'.$service->slug)}}" class="dropdown-item"><i class="{{$service->fontawesome}}"></i> {{$service->name}}</a>
                    @endforeach
                </div>
            </div>
            <a href="{{url('/about')}}" class="nav-item nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}">About</a>
            <a href="{{url('/attorney-bios')}}" class="nav-item nav-link {{ Request::segment(1) === 'attorney-bios' ? 'active' : null }}">Attorney Bios</a>
            <a href="{{url('/contact')}}" class="nav-item nav-link {{ Request::segment(1) === 'contact' ? 'active' : null }}">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
