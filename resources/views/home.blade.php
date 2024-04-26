<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Hotel Daavilla </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.jpg" rel="icon" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->


    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/myclass.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ridip_media.css') }}">
    <style>
        .carousel-item {
            height: 80vh !important;
        }
    </style>
</head>

<body>
    <x-loader-component></x-loader-component>
    <div class="container-xxl bg-white p-0" id="content">

        <!-- Header Start -->

        <x-nav-component></x-nav-component>
        <!-- Header End -->

        <!-- Carousel Start -->
        <x-home-page-carousal></x-home-page-carousal>
        <!-- Carousel End -->

        <!-- About Start -->
        <x-about-content-component></x-about-content-component>
        <!-- About End -->


        <!-- Room Start -->
        {{-- <x-room-component></x-room-component> --}}
        <div class="container">
            <div class="text-center" data-wow-delay="0.1s">
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                <h3 class="mb-5"><span class="text-primary text-uppercase">Daavilla</span> by HPG Guwahati boasts
                    stylish rooms offering a range of thoughtful amenities.</span></h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-1.jpg" alt="">
                            <small
                                class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs3000/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Standard Room</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King
                                    Bed</small>
                                <small class="border-end me-3 pe-3"><i
                                        class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Our Standard Room offers a spacious retreat with a king bed, A/C,
                                shower, mini bar, and more. Enjoy complimentary toiletries, WIFI, and entertainment
                                amenities.</p>
                            <div class="d-flex justify-content-between">
                                {{-- <button type="button" class="btn btn-sm btn-outline-primary rounded py-2 px-4"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">View Detail</button> --}}
                                <a class="btn btn-sm btn-outline-primary rounded py-2 px-4" href="/rooms">View
                                    Detail</a>
                                <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-2.jpg" alt="">
                            <small
                                class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs4000/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Deluxe room</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King
                                    Bed</small>
                                <small class="border-end me-3 pe-3"><i
                                        class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Indulge in luxury in our Deluxe Rooms, featuring a garden/pool
                                view, king bed, sofa, and more. Enjoy amenities like a mini bar, bathrobe, and
                                entertainment options.</p>
                            <div class="d-flex justify-content-between">

                                <a class="btn btn-sm btn-outline-primary rounded py-2 px-4" href="/rooms">View
                                    Detail</a>
                                <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============= -->
                <div class="col-lg-4 col-md-6" data-wow-delay="0.6s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-3.jpg" alt="">
                            <small
                                class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs4500/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Junior Suite room</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King
                                    Bed</small>
                                <small class="border-end me-3 pe-3"><i
                                        class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Experience luxury in our Junior Suite Rooms, featuring a pool
                                view, king bed, sofa, and more. Enjoy amenities like a mini bar, bathrobe, and
                                entertainment options.</p>
                            <div class="d-flex justify-content-between">

                                <a class="btn btn-sm btn-outline-primary rounded py-2 px-4" href="/rooms">View
                                    Detail</a>
                                <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/room-2.jpg" alt="">
                            <small
                                class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs5000/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Suite room</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King
                                    Bed</small>
                                <small class="border-end me-3 pe-3"><i
                                        class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Our Suite Room 303 offers luxurious comfort with a garden view,
                                king bed, jacuzzi bath, and more. Enjoy amenities like a mini bar, bathrobe, and
                                entertainment options.</p>
                            <div class="d-flex justify-content-between">

                                <a class="btn btn-sm btn-outline-primary rounded py-2 px-4" href="/rooms">View
                                    Detail</a>
                                <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->

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
        <!-- Footer Start -->
        <div class="container">
            <x-footer-component></x-footer-component>
        </div>
        <!-- Footer End -->
        <x-newsletter-component></x-newsletter-component>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <script src="{{ asset('js/loader.js') }}"></script>
    <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

    {{-- <script src="{{ asset('js/page_header.js') }}"></script> --}}
</body>

</html>
