<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Service | Hotel Daavilla</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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



    <!-- Template Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ridip_media.css') }}">
    <style>
        .service-item:hover {
            background: #0d6efd;
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


        <!-- Page Header Start -->
        @php
            $page_head = 'Service Page';
        @endphp
        <x-page-header-component :headerContent=$page_head>

        </x-page-header-component>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger w-100">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                    <h4>Host a memorable event for up to 200 guests in our flexible campus with 20 capacity fully
                        equipped
                        board room</h4>
                    <p>Planning a major corporate event or private standard wedding or engagement of your dreams? We can
                        help with outstanding services and spaces, including a private swimming and an immense lawn for
                        outdoor party and galas. We offer meeting room, including a flexible event space, complete with
                        optional customized decor, on-site catering, and audiovisual equipment.</p>
                </div>
                <div class="container d-flex flex-wrap gap-2 justify-content-center col-12">
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-glass-cheers"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">BAR</h3>
                            <p class="col-12 text-center service-card-text">Chic ambiance, craft cocktails, live music,
                                luxury
                                accommodations,
                                exquisite dining..</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-utensils"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Concierge service</h3>
                            <p class="col-12 text-center service-card-text">Personalized assistance, local expertise,
                                reservations, hospitality, convenience, reliability, trust</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-soap"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Dry cleaning</h3>
                            <p class="col-12 text-center service-card-text">Professional garment care, convenience,
                                stain removal,
                                freshness,
                                quality, reliability, efficiency</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-check"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Express check-out</h3>
                            <p class="col-12 text-center service-card-text">Efficient departure, quick process, no
                                waiting, convenience,
                                seamless experience..</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-glass-cheers"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Hair salon</h3>
                            <p class="col-12 text-center service-card-text">Cutting-edge styles, skilled stylists,
                                rejuvenating
                                treatments,
                                personalized care, trendy atmosphere..</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-handshake"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Meeting facilities</h3>
                            <p class="col-12 text-center service-card-text">State-of-the-art spaces, versatile setups,
                                tech-equipped,
                                conducive environment, professional service.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-utensils"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">On-site dining</h3>
                            <p class="col-12 text-center service-card-text">Delicious cuisine, diverse menu, cozy
                                ambiance, impeccable
                                service, convenient location.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-wifi"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Free Wi-Fi</h3>
                            <p class="col-12 text-center service-card-text">Access free Wi-Fi, surf the web, connect,
                                and enjoy internet
                                access without charges or fees, available for all users.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-ban-smoking"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Non-smoking</h3>
                            <p class="col-12 text-center service-card-text">Designated non-smoking area: Ensuring clean
                                air and comfort
                                for
                                all.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-smoking"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Smoking</h3>
                            <p class="col-12 text-center service-card-text">Designated smoking area: Enjoy smoking in
                                designated areas
                                only.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-mug-saucer"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Breakfast</h3>
                            <p class="col-12 text-center service-card-text">Enjoy breakfast service: Delicious morning
                                meals to start
                                your
                                day.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-square-parking"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Valet parking</h3>
                            <p class="col-12 text-center service-card-text">Convenient valet parking: Hassle-free,
                                professional service
                                for
                                your vehicle.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-bell-concierge"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Room service</h3>
                            <p class="col-12 text-center service-card-text">Room service available: Enjoy convenient,
                                personalized
                                service
                                for
                                your comfort.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-bell-concierge"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Breakfast buffet</h3>
                            <p class="col-12 text-center service-card-text">Indulge in breakfast buffet: Varied options
                                for a delightful
                                morning.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-swimmer"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Outdoor pool</h3>
                            <p class="col-12 text-center service-card-text">Refreshing oasis, sparkling waters,
                                sun-soaked relaxation,
                                family-friendly atmosphere, poolside paradise.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-spa"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Spa</h3>
                            <p class="col-12 text-center service-card-text">Tranquil sanctuary, rejuvenating
                                treatments, skilled
                                therapists,
                                relaxation, luxury amenities, holistic wellness.</p>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-car"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Car rental</h3>
                            <p class="col-12 text-center service-card-text">Convenient mobility, wide selection,
                                flexible terms, reliable
                                service, hassle-free experience.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-lock"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Safety deposit box</h3>
                            <p class="col-12 text-center service-card-text">Secure storage, peace of mind, valuables
                                protection,
                                confidentiality assured.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-shirt"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Laundry service</h3>
                            <p class="col-12 text-center service-card-text">Efficient laundering, meticulous care,
                                fresh fabrics, prompt
                                delivery, convenience.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa fa-glass-cheers"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Minibar or fridge</h3>
                            <p class="col-12 text-center service-card-text">Refreshment at hand, stocked with treats,
                                convenient
                                indulgence,
                                customizable options.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap col-md-3 col-11 main-service-card">
                        <div class="d-flex flex-wrap col-12 service-card">
                            <span><i class="fa-solid fa-credit-card"></i></span>
                        </div>
                        <div class="d-flex flex-wrap col-12 service-card">
                            <h3 class="col-12 text-center text-primary service-card-text">Cashless Payment</h3>
                            <p class="col-12 text-center service-card-text">Secure cashless Payment,Devid Card,Credit
                                Card,UPI
                                confidentiality assured.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Footer Start -->
        <x-footer-component></x-footer-component>
        <!-- Footer End -->

        <x-newsletter-component></x-newsletter-component>
        <!-- Back to Top -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/page_header.js') }}"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
