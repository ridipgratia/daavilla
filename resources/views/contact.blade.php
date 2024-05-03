<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact | Hotel Daavilla</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->


    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ridip_media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        <x-nav-component></x-nav-component>

        <!-- Header End -->

        <!-- Page Header Start -->
        @php
            $page_head = 'Contact Page';
        @endphp
        <x-page-header-component :headerContent=$page_head>

        </x-page-header-component>
        <!-- Page Header End -->

        {{-- ------------------booking component start------------------ --}}
        <x-room-booking-form-component></x-room-booking-form-component>
        {{-- ------------------booking component end------------------ --}}

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Contact Us</span></h1>
                    <h4 class="py-3">Got any questions or suggestions? Fill out this form to reach out</h4>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 map"> <!-- div 2 -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14327.004638898685!2d91.7564163048233!3d26.139655345478072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59449a9f6631%3A0xaa1566f8546536ca!2sKahilipara%2C%20Guwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1712207361141!5m2!1sen!2sin"
                            width="600" height="430" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-9"> <!-- div 3 -->
                        <div class="contact-form">
                            <form id="contact-form">
                                @csrf
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="contact-form-div">
                                            <label for="name">Your Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Write your name here">
                                            <p class="contact-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-div">
                                            <label for="email">Your Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Write your email address">
                                            <p class="contact-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-form-div">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                placeholder="Write your subject">
                                            <p class="contact-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-form-div">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
                                            <p class="contact-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-row-reverse">
                                        <button class="btn btn-primary contact-submit-btn" type="submit">Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container">
            <x-footer-component></x-footer-component>
        </div>
        <!-- Footer End -->
        <x-newsletter-component></x-newsletter-component>


    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/page_header.js') }}"></script>
    <script type="module" src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/bookingForm.js') }}"></script>


    <!-- Template Javascript -->
</body>

</html>
