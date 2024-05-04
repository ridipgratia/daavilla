@extends('layouts.app')

@section('title', 'Home | Hotel Daavilla')
@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <style>
        .carousel-item {
            height: 80vh !important;
        }
    </style>
@endsection

@section('content')

    <!-- Carousel Start -->
    <x-home-page-carousal></x-home-page-carousal>
    <!-- Carousel End -->

    <!-- About Start -->
    <x-about-content-component></x-about-content-component>
    <!-- About End -->

    <x-room-component></x-room-component>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center" data-wow-delay="0.1s">
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                <h4>Host a memorable event for up to 200 guests in our flexible campus with 20 capacity fully
                    equipped board room.</h4>
                <p class="mt-2">Planning a major corporate event or private standard wedding or engagement of
                    your dreams? We can help with outstanding services and spaces, including a private swimming and
                    an immense lawn for outdoor party and galas. We offer meeting room, including a flexible event
                    space, complete with optional customized decor, on-site catering, and audiovisual equipment.</p>
            </div>
            <div class="container d-flex flex-wrap gap-2 justify-content-center col-12">
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <span><i class="fa fa-hotel"></i></span>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <h3 class="col-12 text-center text-primary service-card-text">Rooms & Appartment</h3>
                        <p class="col-12 text-center service-card-text">Experience comfort and luxury in our
                            well-appointed rooms and apartments, designed for your utmost relaxation.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <span><i class="fa fa-utensils"></i></span>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <h3 class="col-12 text-center text-primary service-card-text">Food & Restaurant</h3>
                        <p class="col-12 text-center service-card-text">Savor exquisite cuisine at our restaurant,
                            where every dish is a culinary delight.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <span><i class="fa fa-spa"></i></span>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <h3 class="col-12 text-center text-primary service-card-text">Spa & Fitness</h3>
                        <p class="col-12 text-center service-card-text">Indulge in relaxation at our spa and
                            maintain your fitness at our well-equipped facility.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <span><i class="fa fa-swimmer"></i></span>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <h3 class="col-12 text-center text-primary service-card-text">Sports & Gaming</h3>
                        <p class="col-12 text-center service-card-text">Experience a range of sports and gaming
                            options at our hotel, catering to all enthusiasts.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <span><i class="fa fa-glass-cheers"></i></span>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <h3 class="col-12 text-center text-primary service-card-text">Event & Party</h3>
                        <p class="col-12 text-center service-card-text">offers a versatile event space, ideal for
                            hosting a variety of gatherings and parties.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <span><i class="fa fa-dumbbell"></i></span>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <h3 class="col-12 text-center text-primary service-card-text">GYM & Yoga</h3>
                        <p class="col-12 text-center service-card-text">boasts a state-of-the-art gym and yoga
                            facility, perfect for health-conscious travelers.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                    <div class="d-flex flex-wrap col-12 service-card">
                        <a href="/service" class="text-decoration-none ">
                            <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        </a>
                    </div>
                    <div class="d-flex flex-wrap col-12 service-card">
                        <a href="/service" class="text-decoration-none ">
                            <h3 class="col-12 text-center text-primary service-card-text">Explore More</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

    </div>

    <x-newsletter-component></x-newsletter-component>
@endsection
@section('js_links')
    <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
@endsection
