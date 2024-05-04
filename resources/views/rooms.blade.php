    @extends('layouts.app')

    @section('title', 'Room | Hotel Daavilla')

    @section('css_links')
        <link rel="stylesheet" href="{{ asset('css/page_header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    @endsection

    @section('content')
        <!-- Page Header Start -->
        @php
            $page_head = 'Room Page';
        @endphp
        <x-page-header-component :headerContent=$page_head>

        </x-page-header-component>
        <!-- Page Header End -->

        {{-- ------------------booking component start------------------ --}}
        <x-room-booking-form-component></x-room-booking-form-component>
        {{-- ------------------booking component end------------------ --}}

        <!-- Room Start -->
        <x-room-component></x-room-component>
        <!-- Room End -->

        {{-- ---------room book with details for testing------------- --}}
        <x-room-book-with-details-component></x-room-book-with-details-component>
        {{-- ---------room book with details for testing------------- --}}
        <x-newsletter-component></x-newsletter-component>

    @endsection

    @section('js_links')
        <script type="module" src="{{ asset('js/newsletter.js') }}"></script>
        <script src="{{ asset('js/page_header.js') }}"></script>
    @endsection
