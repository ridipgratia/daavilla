<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .example::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
<div" class="container-fluid booking pb-5">
    <!-- Booking Start -->
    <div class="container">
        <div class="p-3 d-flex flex-wrap justify-content-center align-items-center row bg-dark text-white">
            <div class="col-12">
                <div class="d-flex gap-2 example justify-content-center" style="overflow:scroll;">
                    <div class="d-flex justify-content-center align-items-center">
                        <p>Ready to make unforgettable memories? Book now to reserve your comfortable hotel room and
                            ensure
                            a delightful stay!
                        </p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger" id="booking">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="d-none" id="main-form">
                <div class="my-3 d-flex flex-wrap justify-content-center">
                    <p class=" px-3 fst-italic fw-bold">Fill up the details</p>
                    <span id="hide-form" class=""><i class="fa-solid fa-angle-up"></i></span>
                </div>
                <div class="bg-white shadow" style="padding: 35px;">

                    {{-- --------booking form start--------------- --}}
                    <form action="">
                        <div class="row g-2">
                            <div class="col-md-10">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="date" class="form-control datetimepicker-input"
                                                placeholder="Check in" data-target="#date1"
                                                data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <input type="date" class="form-control datetimepicker-input"
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
                                <button class="btn btn-danger w-100">BOOK NOW</button>
                            </div>
                        </div>
                    </form>
                    {{-- ---------------booking form end----------------- --}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Booking End -->
