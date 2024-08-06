@extends('layouts.app')
@section('title', 'Home | Hotel Daavilla')
@section('css_links')
<link rel="stylesheet" href="{{ asset('css/room_details.css') }}">
@endsection

@section('content')
<div class="room-form">
  <div class="greeting_bar">
    <p>Awesome choice! You're getting a great deal with your rate.</p>
  </div>
  <div class="container">
    <div class="left">
      @if (!empty($roomDetails) && $roomDetails['success'])
      <div class="checkin-checkout">
        <div class="checkin">
          <p class="label">Check In</p>
          <p class="date">
            @php
            $date = new DateTime($checkin);
            echo $date->format('l, M d Y');
            @endphp
          </p>
          <p class="time">From 12:00:00</p>
        </div>
        <div class="checkout">
          <p class="label">Check Out</p>
          <p class="date">
            @php
            $date = new DateTime($checkout);
            echo $date->format('l, M d Y');
            @endphp
          </p>
          <p class="time">Until 12:00:00</p>
        </div>
        <div class="room-info">
          @if(isset($roomDetails['roominfo']))
          <div class="block">
            <h6>Room Type</h6>
            <h10>{{ $roomDetails['roominfo']['roomtype'] }}</h10>
          </div>
          <hr>
          <div class="block">
            <h6>Adults</h6>
            <h10>{{ $adults }}</h10>
          </div>
          <hr>
          <div class="block">
            <h6>Children</h6>
            <h10>{{ $children }}</h10>
          </div>
          <hr>
          <div class="block">
            <h6>Price</h6>
            <h10>{{ $roomDetails['roominfo']['rate'] }}</h10>
          </div>
          <hr>
          @endif
        </div>
      </div>
      @endif
      <div class="checkin-checkout card">
        <div class="img">
          <img src="{{ asset('img/firework.png') }}" alt="">
        </div>
        <div class="description">
          <p><b>It's almost yours</b></p>
          <p>We just need a few more details to confirm your booking at Daavilla Hotel.</p>
        </div>
      </div>
      <div class="checkin-checkout card">
        <div class="img">
          <img src="{{ asset('img/tag.png') }}" alt="">
        </div>
        <div class="description">
          <p><b>No surprises</b></p>
          <p>Pay the price you see – no booking fees!.</p>
        </div>
      </div>
      <div class="checkin-checkout card">
        <div class="img">
          <img src="{{ asset('img/shield.png') }}" alt="">
        </div>
        <div class="description">
          <p><b>Your booking is secure</b></p>
          <p>Your details are protected by a secure connection.</p>
        </div>
      </div>
    </div>

    <div class="right">
      <div class="checkin-checkout">
        <div id="error-messages"></div>

        <h1><b>Enter Your Details</b></h1>

        <form id="bookingForm" method="POST" action="#">
          @csrf
          <div class="form-container">
            <input type="hidden" id="route-url" value="{{ route('home') }}">

            <div class="input-container">
              <input class="form-field" id="f-name" type="text" placeholder="First Name">
              <input class="form-field" id="l-name" type="text" placeholder="Last Name">
            </div>
            <div class="input-container">
              <input class="form-field" id="email" type="text" placeholder="Email">
              <input class="form-field" id="phone" type="text" placeholder="Phone Number">
            </div>
            <textarea class="form-field longinput" id="address" placeholder="Address"></textarea>

            @if(isset($roomDetails['roominfo']))
            <div class="card room-desk">
              @php
              if (is_null($roomDetails['roominfo']['room_imagename'])) {
              echo '<div class="img"><img src="' . asset('img/firework.png') . '" alt=""></div>';
              } else {
              echo '<div class="img"><img src="' . $roomDetails['roominfo']['room_imagename'] . '" alt=""></div>';
              }
              @endphp

              <div class="description">
                <div class="room-title">Standard Room</div>
                <div class="room-description">test</div>
                <div><b>Your Stay Includes:</b></div>
                <a href="#" class="booking-conditions">Booking Conditions</a>
              </div>
            </div>
            @endif
            <textarea class="form-field longinput" id="special-request" placeholder="Special Request"></textarea>
            <button type="submit" class="submit-form">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="loader" style="display:none;position:fixed;left:50%;top:50%;transform:translate(-50%, -50%);z-index:1000;">
  <span class="loader"></span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/booking_form.js') }}"></script>
@endsection
