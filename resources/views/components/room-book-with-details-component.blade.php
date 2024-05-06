<div class="main-div border shadow">
    <div class="room-type m-3">
        <span class="fw-bold">Superior Room</span>
    </div>
    <div class="row d-flex justify-content-between">
        <div class="room room-img flex-nowrap  col-md-5">
            <img src="{{ asset('img/room-2.jpg') }}" alt="">
        </div>
        <div class="room room-details  col-md-7 d-flex flex-column">
            <span class=" fst-italic fw-bold">Room at a glance</span>
            <div class="details d-inline-block">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium veniam laborum quam!
                <a href="">view more details</a>
            </div>
            <div class="d-flex flex-column justify-content-end align-items-end h-75 p-3">
                <div class="price">4500/night</div>
                <div class="">
                    <button class="btn btn-danger">BOOK NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div class="extend" id="extend">
        <span>
            <i id="span" class="fa-solid fa-angle-down"></i>
        </span>
    </div>
    <div class="d-none justify-content-center" id="extended-details">
        <button>Breakfast</button>
        <button>Lunch</button>
        <button>Dinner</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    var extend = document.getElementById('extend');
    var extendedDetail = document.getElementById('extended-details');
    var span = document.getElementById('span');

    extend.addEventListener('click', function() {
        if (extendedDetail.classList == 'd-none') {
            console.log("ok");
        }
        extendedDetail.classList.add('d-block');
        extendedDetail.classList.remove('d-none');
        span.classList.add('fa-angle-up');
        span.classList.remove('fa-angle-down');
    })



    // $(function() {
    //     $('#extend').click(function() {
    //         console.log('Hello');
    //         $('#extended-details').toggle();
    //     })
    // })
</script>
