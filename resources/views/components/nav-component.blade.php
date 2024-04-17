<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="index.html"
                class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-white text-uppercase">DAAVILLA</h1>
            </a>
        </div>
        <div class="col-lg-9">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-white text-uppercase">DAAVILLA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="/about" class="nav-item nav-link {{ Request::is('aboout') ? 'active' : '' }}">About</a>
                        <a href="/service" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
                        <a href="/room" class="nav-item nav-link {{ Request::is('room') ? 'active' : '' }}">Rooms</a>
                        <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->