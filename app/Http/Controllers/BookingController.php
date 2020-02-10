<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    public function booking_confirmation($id)
    {
        Booking::create([
            'user_id' => Auth::id(),
            'doctor_id'=> $id,
        ]);
        return view('frontend.booking_status');
    }
}
