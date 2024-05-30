<div class="container-fluid p-0 mb-5">

    <div id="header-carousel" class="carousel slide main-slider" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/entrence.jpeg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h1 class="text-white mb-4 animated slideInDown">Hotel <span
                                class="text-light text-uppercase fst-italic fw-bold">Daavilla</span></h1>
                        <h3 class="text-white mb-4 animated slideInDown"><span class="text-light fst-italic fw-bold">The
                                exquisite hotel in Guwahati offers
                                luxurious amenities and serene surroundings.</span></h3>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/people.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h2 class=" text-white mb-4 animated slideInDown">Trendy hotel near station, airport,
                            with stellar amenities, peaceful location.</h2>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="d-flex flex-wrap col-12 justify-content-center  check-in-out-container">
            <div class="d-flex flex-wrap col-11 check-in-out-div">
                <div class="d-flex flex-wrap col-4 check-in-out-div-1">
                    <span><i class="fa-solid fa-check"></i></span>
                    <p>Check-in : 2:00 PM</p>
                </div>
                <div class="check-in-out-bar">
                </div>
                <div class="d-flex flex-wrap col-4 check-in-out-div-1">
                    <span><i class="fa-solid fa-check"></i></span>
                    <p>Check-out: 12:00 PM</p>
                </div>
            </div>
        </div>
    </div>
    {{-- ------------------booking component start------------------ --}}
    <x-room-booking-form-component></x-room-booking-form-component>
    {{-- ------------------booking component end------------------ --}}

</div>
