<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Service | Hotel Daavilla</title>
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Template Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
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
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/service.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check out" data-target="#date2"
                                            data-toggle="datetimepicker" />
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
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                    <h4>Host a memorable event for up to 200 guests in our flexible campus with 20 capacity fully
                        equipped
                        board room</h4>
                    <p>Planning a major corporate event or private standard wedding or engagement of your dreams? We can
                        help with outstanding services and spaces, including a private swimming and an immense lawn for
                        outdoor party and galas. We offer meeting room, including a flexible event space, complete with
                        optional customized decor, on-site catering, and audiovisual equipment.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">BAR</h5>
                            <p class="text-body mb-0">Chic ambiance, craft cocktails, live music, luxury
                                accommodations,
                                exquisite dining..</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Concierge service</h5>
                            <p class="text-body mb-0">Personalized assistance, local expertise, reservations,
                                recommendations, hospitality, convenience, reliability, trust.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-soap fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Dry cleaning</h5>
                            <p class="text-body mb-0">Professional garment care, convenience, stain removal, freshness,
                                quality, reliability, efficiency</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-check fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Express check-out</h5>
                            <p class="text-body mb-0">Efficient departure, quick process, no waiting, convenience,
                                seamless experience..</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Hair salon</h5>
                            <p class="text-body mb-0">Cutting-edge styles, skilled stylists, rejuvenating treatments,
                                personalized care, trendy atmosphere.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-handshake fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Meeting facilities</h5>
                            <p class="text-body mb-0">State-of-the-art spaces, versatile setups, tech-equipped,
                                conducive environment, professional service..</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">On-site dining</h5>
                            <p class="text-body mb-0">Delicious cuisine, diverse menu, cozy ambiance, impeccable
                                service, convenient location.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-wifi fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Free Wi-Fi</h5>
                            <p class="text-body mb-0">Access free Wi-Fi, surf the web, connect, and enjoy internet
                                access without charges or fees, available for all users.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-ban-smoking fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Non-smoking</h5>
                            <p class="text-body mb-0">Designated non-smoking area: Ensuring clean air and comfort for
                                all.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-smoking fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Smoking</h5>
                            <p class="text-body mb-0">Designated smoking area: Enjoy smoking in designated areas only.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-mug-saucer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Breakfast</h5>
                            <p class="text-body mb-0">Enjoy breakfast service: Delicious morning meals to start your
                                day.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-square-parking fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Valet parking</h5>
                            <p class="text-body mb-0">Convenient valet parking: Hassle-free, professional service for
                                your vehicle.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-bell-concierge  fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Room service</h5>
                            <p class="text-body mb-0">Room service available: Enjoy convenient, personalized service
                                for
                                your comfort.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-bell-concierge  fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Breakfast buffet</h5>
                            <p class="text-body mb-0">Indulge in breakfast buffet: Varied options for a delightful
                                morning.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Outdoor pool</h5>
                            <p class="text-body mb-0">Refreshing oasis, sparkling waters, sun-soaked relaxation,
                                family-friendly atmosphere, poolside paradise..</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Spa</h5>
                            <p class="text-body mb-0">Tranquil sanctuary, rejuvenating treatments, skilled therapists,
                                relaxation, luxury amenities, holistic wellness..</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-car fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Car rental</h5>
                            <p class="text-body mb-0">Convenient mobility, wide selection, flexible terms, reliable
                                service, hassle-free experience..</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-lock fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Safety deposit box</h5>
                            <p class="text-body mb-0">Secure storage, peace of mind, valuables protection,
                                confidentiality assured.</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-shirt fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Laundry service</h5>
                            <p class="text-body mb-0">Efficient laundering, meticulous care, fresh fabrics, prompt
                                delivery, convenience..</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Minibar or fridge</h5>
                            <p class="text-body mb-0">Refreshment at hand, stocked with treats, convenient indulgence,
                                customizable options..</p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-credit-card fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Cashless Payment</h5>
                            <p class="text-body mb-0">Secure cashless Payment,Devid Card,Credit Card,UPI
                                confidentiality assured.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Footer Start -->
        <x-footer-component></x-footer-component>
        <!-- Footer End -->


        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
