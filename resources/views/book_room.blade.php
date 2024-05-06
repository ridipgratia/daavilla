@extends('layouts.app')

@section('title', 'Book Room')
@section('css_links')
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/book_room.css') }}">
@endsection
@section('content')
    <form action="" id="select-room-form" class="d-flex flex-wrap col-12">
        <div class="d-flex flex-wrap col-md-8 col-12  basic-details-div">
            <div class="d-flex col-5 basic-details-div-1">
                <button type="button" class="col-1"><i class="fa-solid fa-calendar-days"></i></button>
                <div class="col-10">
                    <p>Check-in Check-out</p>
                    <h3>Sat 04 May - Sun 05 May</h3>
                </div>
                <button type="button" class="col-1"><i class="fa-solid fa-caret-down"></i></button>
            </div>
            <div class="d-flex flex-wrap col-5 basic-details-div-1">
                <button type="button" class="col-1"><i class="fa-solid fa-calendar-days"></i></button>
                <div class="col-10">
                    <p>Rooms & Person</p>
                    <h3>1 Room & 2Person</h3>
                </div>
                <button type="button" class="col-1"><i class="fa-solid fa-person"></i></button>
            </div>
        </div>
        <div>
            <input type="text" value="" id="pickadate" class="pickadate" />
            <br />
            <input type="text" value="" id="pickadateandtime" class="pickatime" />
            <button type="button" id="btn">Gte Date</button>
        </div>
    </form>
@endsection

@section('js_links')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // $("#pickadate").flatpickr();
        $("#pickadateandtime").flatpickr({
            enableTime: false,
            dateFormat: "Y-m-d"
        });
        $(document).on('click', '#btn', function() {
            var date = $('#pickadateandtime').val();
            var options = {
                weekday: 'short',
                day: 'numeric',
                month: 'short'
            };
            var start = new Date(date);
            console.log(start.toLocaleDateString('en-US', options))

        })
    </script>
@endsection
