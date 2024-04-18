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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ridip_media.css') }}">
    <style>
       .service-item:hover{
        background: #0d6efd;
       }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        
            <x-nav-component></x-nav-component>
        <!-- Header End -->
        
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/living-room.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Living Luxury</h6>
                                <h1 class="text-white mb-4 animated slideInDown">Hotel <span class="text-light text-uppercase fst-italic fw-bold">Daavilla</span></h1>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/people.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Living Luxury</h6>
                                <h2 class=" text-white mb-4 animated slideInDown">Trendy Guwahati hotel near station, airport, with stellar amenities, peaceful location.</h2>
                                {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
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
                            <button class="btn btn-primary w-100">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotel Daavilla</span></h1>
                        <p class="mb-4">Daavilla is in one of the trendiest sections of Guwahati, placing close to railway station, Airport, business district and popular attractions. The elegant Hotel “Daavilla’’ in Guwahati offers stellar amenities and a peaceful private location a short drive from heart of the city Dispur.</p>
                        <details>
                            <summary class="text-primary">More...</summary>
                            <p class="mb-4">Daavilla is in one of the trendiest sections of Guwahati, placing close to
                                railway station, Airport, business district and popular attractions. The elegant Hotel
                                “Daavilla’’ in Guwahati offers stellar amenities and a peaceful private location a short
                                drive from heart of the city Dispur. While staying at the hotel, you can cool off in our
                                outdoor swimming pool after tiring day. You don’t need to step out if you are hungry sample
                                multicuisine at our elegant restaurant that also provides room service. For a causal meeting
                                over drinks or a quick bite with friends, head to the lounge Bar, open daily from noon until
                                11pm. Daavilla provides easy access to Lokpriya Gopinath Bordoloi International Airport
                                (GAU) 19km and the nearby railway station 10km. Nearest Hospital is in 1km.</p>
                            
                            <p class="mb-4">Prefer just to relax? Lounge by our outdoor infinity pool and soak up scenic
                                private lawn. You can maintain your workout routine with a visit to our health club and
                                treat yourself to revitalizing treatments in our beautiful spa & parlour. With on-site
                                restaurants and a bar, you can enjoy a delicious meal or refreshing cocktail after on-site
                                meetings or sightseeing</p>

                            <p class="mb-4">When you’re ready to explore, visit ancient Hindu pilgrimage sites like <span
                                    class="text-primary">Kamakhya Temple</span> or spot rare birds at Deepor Beel Wildlife
                                Sanctuary, Assam State Zoo, . Business travellers appreciate our proximity to local
                                industrial parks, universities, and technology companies, while families enjoy visiting the
                                clouded leopards and macaques at Assam State Zoo less than 10 minutes away.</p>
                        </details>
                        <br> <br>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 zoomIn" data-wow-delay="0.5s" src="img/child.jpg"  style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 zoomIn" data-wow-delay="0.3s" src="img/man.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 zoomIn" data-wow-delay="0.1s" src="img/drinks.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 zoomIn" data-wow-delay="0.7s" src="img/biryani.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 zoomIn" data-wow-delay="0.5s" src="img/Kamakhya_Temple_Guwahati.JPG"  style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 zoomIn" data-wow-delay="0.3s" src="img/Gatway_of_Kalakhetra,_Guwahati,_Assam.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 zoomIn" data-wow-delay="0.1s" src="img/Chital_or_Spotted_Deer.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 zoomIn" data-wow-delay="0.7s" src="img/deepor.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Things to do in Guwahati</h6>
                        <p>Guwahati, the bustling capital city of Assam, India, offers a vibrant tapestry of cultural, historical, and natural attractions. Start your exploration with the Kamakhya Temple, a renowned Hindu pilgrimage site perched atop the Nilachal Hill. Delve into the region's rich history at the Assam State Museum, showcasing an impressive collection of artifacts and artworks. For a taste of local life, stroll through the bustling markets like Fancy Bazaar and Paltan Bazaar. Wildlife enthusiasts can visit the Assam State Zoo and Botanical Garden to see a variety of animal species, including the famous one-horned rhinoceros. Guwahati's culinary scene is also a highlight, with its array of authentic Assamese dishes and diverse culinary offerings.</p>
                        <details>
                            <summary class="text-primary">More...</summary>
                            <p>
                                <h3 class="text-secondary">Kamakhya Temple</h3>
                                20 mi / 13 km from the hotel <br>
                                Kamakhya Temple in Guwahati is considered one of the oldest and most sacred centres of Tantric practices, dedicated to the goddess Kamakhya. Visit to learn about the history of the temple and to admire the surrounding Nilachal hills.
                            </p>
                            <p>
                                <h3 class="text-secondary">Assam state Zoo</h3>
                                10 mi / 7 km from the hotel <br>
                                Discover Deepor Beel Bird Sanctuary, a permanent freshwater lake located southwest of Guwahati city. It is renowned for its rich diversity of fauna and aquatic vegetation, which attracts wild elephants.
                            </p>
                            <p>
                                <h3 class="text-secondary"> Sankardev khalaketra </h3>
                                10 mi / 5 km from the hotel <br>
                                commonly known as Kalakshetra, is a cultural institution in the Panjabari area of Guwahati, Assam, India, named after the medieval poet-playwright and reformer Srimanta Sankardev. It includes a cultural museum, library, a children's park, and various facilities for preserving, demonstrating and performing cultural items and history. In addition to being Northeast India's largest cultural congregation, the Kalakshetra is also a major tourist spot in Guwahati
                            </p>
                            <p>
                                <h3 class="text-secondary">Guwahati University</h3>
                                30 mi / 19 km from the hotel <br>
                                One of northeast India’s oldest and most well-respected universities, Gauhati University (GU) was established in 1948 and is affiliated with more than 320 colleges and institutes throughout Lower Assam.
                            </p>
                            <p>
                                <h3 class="text-secondary">Deepor Beel</h3>
                                25 mi / 17 km from the hotel <br>
                                Discover Deepor Beel Bird Sanctuary, a permanent freshwater lake located southwest of Guwahati city. It is renowned for its rich diversity of fauna and aquatic vegetation, which attracts wild elephants.
                            </p>
                            
                            <p><span class="text-primary fw-bold fst-italic">Lokpriya Gopinath Bordoloi International Airport <i class="fas fa-plane"></i></span> <br>
                                By car :
                                Take the fastest route via NH-17 and arrive at the hotel in <span class="text-white p-1 fw-bold bg-warning rounded-1">45 minutes</span> <br>
                            </p>
                            <p>
                                <span class="text-primary fw-bold fst-italic">Guwahati Railway Station <i class="fas fa-train"></i></span> <br>
                                By car :
                                Take the fastest route via GS Road arrive at the hotel in about <span class="text-white p-1 fw-bold bg-warning rounded-1">20 minutes</span>
                            </p>
                        </details>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-1.jpg" alt="">
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs3000/Night</small>
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
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Our Standard Room offers a spacious retreat with a king bed, A/C, shower, mini bar, and more. Enjoy complimentary toiletries, WIFI, and entertainment amenities.</p>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-sm btn-outline-primary rounded py-2 px-4" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">View Detail</button>
                                    <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-2.jpg" alt="">
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs4000/Night</small>
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
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Indulge in luxury in our Deluxe Rooms, featuring a garden/pool view, king bed, sofa, and more. Enjoy amenities like a mini bar, bathrobe, and entertainment options.</p>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-sm btn-outline-primary rounded py-2 px-4" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">View Detail</button>
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
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs4500/Night</small>
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
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Experience luxury in our Junior Suite Rooms, featuring a pool view, king bed, sofa, and more. Enjoy amenities like a mini bar, bathrobe, and entertainment options.</p>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-sm btn-outline-primary rounded py-2 px-4" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">View Detail</button>                                    
                                    <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-2.jpg" alt="">
                                <small class="position-absolute start-50 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">Rs5000/Night</small>
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
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>King Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bathroom</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small> 
                                </div>
                                <p class="text-body mb-3">Our Suite Room 303 offers luxurious comfort with a garden view, king bed, jacuzzi bath, and more. Enjoy amenities like a mini bar, bathrobe, and entertainment options.</p>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-sm btn-outline-primary rounded py-2 px-4" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">View Detail</button>                                    
                                    <a class="btn btn-sm btn-outline-danger rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- model starts--}}

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Deluxe Room</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    2. 	201,202,203,204 (Estimated Price Rs. 4000) 3 Adult <br> 
                                        Room Size: <br>
                                        Garden /pool view <br>
                                        A/C <br>
                                        King Bed <br>
                                        Couch sofa with coffee table  <br>

                                        Shower  <br>
                                        Mini bar <br>
                                        Dry kitchenette TCM Counter  <br>
                                        Bathroom <br>
                                        Bathrobe <br>
                                        Toiletries <br>
                                        Bath linen <br>
                                        Entertainment <br>
                                        WIFI <br>
                                        Television 
                                </div>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- model ends --}}
        <!-- Room End -->
        
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                    <h4>Host a memorable event for up to 200 guests in our flexible campus with 20 capacity fully equipped board room.</h4>
                    <p class="mt-2">Planning a major corporate event or private standard wedding or engagement of your dreams? We can help with outstanding services and spaces, including a private swimming  and an immense lawn for outdoor party and galas. We offer meeting room, including a flexible event space, complete with optional customized decor, on-site catering, and audiovisual equipment.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.1s">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rooms & Appartment</h5>
                            <p class="mb-0 text-dark">Experience comfort and luxury in our well-appointed rooms and apartments, designed for your utmost relaxation.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.2s">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Food & Restaurant</h5>
                            <p class="text-body mb-0">Savor exquisite cuisine at our restaurant, where every dish is a culinary delight.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.3s">
                        <a class="service-item rounded text-decoration-none" href="#">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Spa & Fitness</h5>
                            <p class="text-body mb-0">Indulge in relaxation at our spa and maintain your fitness at our well-equipped facility.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.4s">
                        <a class="service-item rounded text-decoration-none" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Sports & Gaming</h5>
                            <p class="text-body mb-0">
                                Experience a range of sports and gaming options at our hotel, catering to all enthusiasts.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.5s">
                        <a class="service-item rounded text-decoration-none" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Event & Party</h5>
                            <p class="text-body mb-0">offers a versatile event space, ideal for hosting a variety of gatherings and parties.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.6s">
                        <a class="service-item rounded text-decoration-none" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">GYM & Yoga</h5>
                            <p class="text-body mb-0">boasts a state-of-the-art gym and yoga facility, perfect for health-conscious travelers.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4" data-wow-delay="0.6s">
                        <a class="service-item rounded text-decoration-none" href="/service">
                            {{-- <div class="service-icon bg-transparent border rounded p-1"> --}}
                                {{-- <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center"> --}}
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                {{-- </div> --}}
                            {{-- </div> --}}
                            <h5 class="mb-3">Explore More</h5>
                        </a>
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
        
    </div>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
 </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>