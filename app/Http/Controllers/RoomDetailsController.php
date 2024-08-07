<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoomDetailsController extends Controller
{
    public function getRoomDetailsForm(Request $request)
    {
        // Get data from the request, with default values
        $roomId = $request->input('roomid');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $adults = $request->input('adults');
        $children = $request->input('children');

        // Make the POST request to the Room Detail API
        $response =  Http::post('https://daavilla.in/apis/api/roomDetail', [
            'roomid' => $roomId,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'adults' => $adults,
            'children' => $children,
            // 'roomid' => 1,
            // 'checkin' => '2024-06-18',
            // 'checkout' => '2024-06-19',
            // 'adults' => 2,
            // 'children' => 0,

        ]);

        // Decode the JSON response
        $roomDetails = $response->json();

        // Pass the API response to the view
        // return view('room_details', compact('roomDetails',$request));
        return view('room_details', [
            'roomDetails'=>$roomDetails ,
            'roomid' => $roomId,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'adults' => $adults,
            'children' => $children,
            // 'roomid' => 1,


        ]);
    }
}
