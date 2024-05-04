@extends('layouts.app')

@section('title', 'Service | Hotel Daavilla')

@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    <style>
        .service-item:hover {
            background: #0d6efd;
        }
    </style>
@endsection

@section('content')
    <!-- Page Header Start -->
    @php
        $page_head = 'Service Page';
    @endphp
    <x-page-header-component :headerContent=$page_head>

    </x-page-header-component>
    <!-- Page Header End -->

    {{-- ------------------booking component start------------------ --}}
    <x-room-booking-form-component></x-room-booking-form-component>
    {{-- ------------------booking component end------------------ --}}


    <!-- Service Start -->
    <x-service-component></x-service-component>
    <!-- Service End -->

    <x-newsletter-component></x-newsletter-component>


@endsection

@section('js_links')
    <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/page_header.js') }}"></script>

@endsection
