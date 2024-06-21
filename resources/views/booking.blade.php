@extends('layouts.app')

@section('css_links')
<link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection

@section('content')
<div class="container">
    {{-- <div class="booking-form"> --}}
        <form action="{{ route('rooms.checkAvailability') }}" method="POST" class="booking-form">
            @csrf
            <div class="input-container">
                <div>
                    <label class="checkin" for="checkin">CHECK IN</label>
                    <input type="date" id="checkin" name="checkin" value="{{request('checkin')}}">
                </div>
                <div>
                    <label for="checkout">CHECK OUT</label>
                    <input type="date" id="checkout" name="checkout" value="{{request('checkout')}}">
                </div>
            </div>
            <div class="input-container">
                <div>
                    <label for="adults">ADULTS</label>
                    <input type="number" id="adults" name="adults" value="{{request('adults')}}" min="1">
                </div>
                <div>
                    <label for="children">CHILDREN</label>
                    <input type="number" id="children" name="children" value="{{request('children')}}" min="0">
                </div>
            </div>
            <div class="check-input">
                <button type="submit" class="check-availability-btn">
                    <i class="fa-solid fa-magnifying-glass"></i> Check Availability
                </button>
            </div>
        </form>
        {{--
    </div> --}}

    <div class="rooms">
        @if (!empty($rooms))
        @foreach ($rooms as $room)
        <div class="card">
            <!-- Assuming you have an image for each room -->
            @if ($room['room_imagename'])
            <img src="{{ asset('img/' . $room['room_imagename']) }}" alt="{{ $room['roomtype'] }}">
            @else
            <img src="{{asset('img/room-' . $room['roomid'] .'.jpg')}}" alt="">
            @endif

            <div class="card-body">
                <h5 class="card-title">{{ $room['roomtype'] }}</h5>
                <p class="card-text">{{ $room['roomdescription'] }}</p>
                <p class="card-text">₹{{ number_format($room['rate'], 2) }}/night</p>
                <form action="{{route('roomDetailsForm')}}" method="GET">
                    @csrf
                    <input type="hidden" name="checkin" value="{{ request('checkin') }}">
                    <input type="hidden" name="checkout" value="{{ request('checkout') }}">
                    <input type="hidden" name="adults" value="{{ request('adults') }}">
                    <input type="hidden" name="children" value="{{ request('children') }}">
                    <input type="hidden" name="roomid" value="{{ $room['roomid'] }}">
                    <button type="submit" class="btn-primary">Select</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <p class="no-rooms-message">Enter details above to check available rooms.</p>
        @endif
    </div>
</div>
@endsection