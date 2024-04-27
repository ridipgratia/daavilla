<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // ------------------ first form booking check in and check out with room details ------------------
    public function firstFormBooking(Request $request)
    {
        return view('temp-booking');
    }
    // ----------------- booking date testing -----------------
    public function firstFormBookingGet(Request $request)
    {
        $string_date = $_GET['check_in'];
        $time_date = strtotime($string_date);
        $date = date('Y-m-d', $time_date);
        return response()->json(['date' => $date, 'type' => gettype($date), 'second_date' => gettype($_GET['date_value'])]);
    }
}
