<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

    //-------------page to book now -----------------------//
    public function index(){
        $rooms = [];

        return view('booking', compact('rooms'));
    }
//-------function to render the available rooms----//

public function checkAvailability(Request $request)
{
    // Validate incoming request data
    $request->validate([
        'checkin' => 'required|date',
        'checkout' => 'required|date|after_or_equal:checkin',
        'adults' => 'required|integer|min:1',
        'children' => 'nullable|integer|min:0',
    ]);

    // Extract inputs from the request
    $checkin = $request->input('checkin');
    $checkout = $request->input('checkout');
    $adults = $request->input('adults');
    $children = $request->input('children');

    try {
        // Make an API request to fetch room availability
        $response = Http::post('https://daavilla.in/apis/api/roomlist', [
            'checkin' => $checkin,
            'checkout' => $checkout,
            'adults' => $adults,
            'children' => $children,
        ]);

        // Check if the request was successful (status code 200)
        if ($response->successful()) {
            // Decode JSON response
            $responseData = $response->json();

            // Check if 'success' is true and 'roominfo' exists
            if (isset($responseData['success']) && $responseData['success'] && isset($responseData['roominfo'])) {
                $rooms = $responseData['roominfo'];
            } else {
                // Handle case where 'success' is false or 'roominfo' is missing
                $rooms = [];
                // Optionally, you can log this issue or handle it differently
            }
        } else {
            // Handle unsuccessful API response
            $rooms = [];
            // Optionally, you can log this issue or handle it differently
        }
    } catch (\Exception $e) {
        // Handle exceptions if Guzzle HTTP request fails
        $rooms = [];
        // Log the exception or handle it differently
    }

    // Return view with rooms data
    return view('booking', compact('rooms'));
}
public function redirect(){
    return view('booking');
}

//----------------Functions to redirect to selected room's detail page -------------------//
// public function confirmation(Request $request){
//     $checkin = $request->input('checkin');
//     $checkout = $request->input('checkout');
//     $adults = $request->input('adults');
//     $children = $request->input('children');
//     $roomid = $request->input('roomid');

//     $response = Http::post('',
//         [
//             'rooomid' => $roomid,
//             'checkin' => $checkin,
//             'checkout' => $checkout,
//             'adults' => $adults,
//             'children' => $children,

//         ]

//         );

//         $data = $response->json();

//         return view('confirmation',compact($data));
// }

}
