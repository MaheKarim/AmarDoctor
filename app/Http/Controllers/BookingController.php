<?php

namespace App\Http\Controllers;

use App\SiteSettings;
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
        $settings = SiteSettings::find(1);

        return view('frontend.booking_status',compact('settings'));
    }
    public function showbooking()
    {
      $bookings = Booking::where('user_id', Auth::id())->get();
      $settings = SiteSettings::find(1);

      return view('backend.multi-dashboard.user._home_user', compact('bookings','settings'));
    }
}
