{{-- <!-- Header Start -->
<style>
    .active {
        color: #FEA116;
    }
</style>
<div class="container-fluid bg-primary px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-primary d-none d-lg-block">
            <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-white text-uppercase">DAAVILLA</h1>
            </a>
        </div>
        <div class="col-lg-9">

            <nav class="navbar navbar-expand-lg bg-primary navbar-dark p-3 p-lg-0">
                <a href="/" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-white text-uppercase">DAAVILLA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                        <a href="/service"
                            class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
                        <a href="/rooms" class="nav-item nav-link {{ Request::is('rooms') ? 'active' : '' }}">Rooms</a>
                        <a href="/contact"
                            class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End --> --}}

<div class="container-fluid bg-primary px-0 d-flex flex-wrap main-navbar-div">
    {{-- <div class="d-flex flex-wrap navbar-head-div">
        <a href="/">DAAVILLA</a>
        
        
        <button class="nav-btn"><i class="fa-solid fa-bars"></i></button>
    </div> --}}
    <div class="d-flex flex-wrap navbar-head-div" style="padding:0px">
        <a href="/" style="padding: 0px">
        <img src="{{asset('img/DAAVILLA_PNG.png')}}" style="width:130px ;padding :0px;" alt="">
        </a>
        
        <button class="nav-btn"><i class="fa-solid fa-bars"></i></button>
    </div>
    <div class="d-flex flex-wrap navbar-link-div">
        <a href="/" class="nav-link {{ Request::is('/') ? 'active_link' : '' }}">Home <span
                class="nav-span"></span></a>
        <a href="/about" class="nav-link {{ Request::is('about') ? 'active_link' : '' }}">About <span
                class="nav-span"></span></a>
        <a href="/service" class="nav-link {{ Request::is('service') ? 'active_link' : '' }}">Services <span
                class="nav-span"></span></a>
        <a href="/rooms" class="nav-link {{ Request::is('rooms') ? 'active_link' : '' }}">Rooms <span
                class="nav-span"></span></a>
        <a href="/contact" class="nav-link {{ Request::is('contact') ? 'active_link' : '' }}">Contact <span
                class="nav-span"></span></a>
    </div>
</div>
