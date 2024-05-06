<div class="main-div border shadow">
    <div class="room-type m-3">
        <span class="fw-bold">Superior Room</span>
    </div>
    <div class="row d-flex justify-content-between">
        <div class="room room-img flex-nowrap  col-md-5 p-3">
            <img src="{{ asset('img/room-2.jpg') }}" alt="">
        </div>
        <div class="room room-details  col-md-7 d-flex flex-column">
            <span class=" fst-italic fw-bold">Room at a glance</span>
            <div class="details d-flex col-md-12">
                <div class="feature d-flex col">
                    Room dimension:
                </div>
                <div class="feature d-flex col">
                    max guest: 2 adults
                </div>
                <div class="feature d-flex col">
                    bed type : king size
                </div>
            </div>
            <a href="" class="text-danger fw-bold fst-itallic">view more details</a>
            <div class="d-flex flex-column justify-content-end align-items-end h-75 p-3">
                <div class="price">4500/night</div>
                <div class="">
                    <button class="btn btn-danger">BOOK NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div class="extend d-flex justify-content-center" id="extend">
        <h4>Other plans</h4>
        <span>
            <i id="span" class="fa-solid fa-angle-down mx-3"></i>
        </span>
    </div>
    <div class="d-none justify-content-center" id="extended-details">
        <h4 class="mx-5">Select meal plan</h4>
        <div class="meals d-flex row  mx-5">
            <div class="meal-plan justify-content-around d-flex col">
                <input type="checkbox" name="room-only" id="roomOnly">
                <label for="room-only">Room only</label>
            </div col-12>
            <div class="meal-plan justify-content-around d-flex col">
                <input type="checkbox" name="breakfast" id="breakfast">
                <label for="breakfast">Include Breakfast</label>
            </div col-12>
            <div class="meal-plan justify-content-around d-flex col">
                <input type="checkbox" name="lunch" id="lunch">
                <label for="lunch">Include Lunch</label>
            </div col-12>
            <div class="meal-plan justify-content-around d-flex col">
                <input type="checkbox" name="dinner" id="dinner">
                <label for="dinner">Include Dinner</label>
            </div>
            <div class="meal-plan justify-content-around d-flex col">
                <input type="checkbox" name="fullboard" id="fullBoard">
                <label for="dinner">Full Board</label>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    var extend = document.getElementById('extend');
    var extendedDetail = document.getElementById('extended-details');
    var span = document.getElementById('span');

    extend.addEventListener('click', function() {
        if (extendedDetail.classList.contains('d-none')) {
            // console.log("yes");
            extendedDetail.classList.add('d-block');
            extendedDetail.classList.remove('d-none');
            span.classList.add('fa-angle-up');
            span.classList.remove('fa-angle-down');
        } else {
            // console.log("ok its done");
            extendedDetail.classList.add('d-none');
            extendedDetail.classList.remove('d-block');
            span.classList.add('fa-angle-down');
            span.classList.remove('fa-angle-up');
        }
    })
</script>
