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
    public function showbooking()
    {
      $bookings = Booking::where('user_id', Auth::id())->get();
      $settings = SiteSettings::find(1);

      return view('backend.multi-dashboard.user._home_user', compact('bookings','settings'));
    }
}
