<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Hotel Daavilla </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}
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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

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
        <x-room-component></x-room-component>
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
    <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/page_header.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
