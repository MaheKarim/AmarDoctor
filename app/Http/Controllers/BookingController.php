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

    public function statusChangeForBooking($id)
    {
        $data = [ ];
        $data['bookings'] = Booking::find($id);
        return view('backend.booking.change_status', $data);
    }

    public function bookingStatusStore(Request $request)
    {
        // Validation Will Here
        $bookings = Booking::findOrfail($request)->first();
        $bookings->status = $request->status;
        $bookings->save();

        session()->flash('success','Successfully Updated!');
        return redirect(route('admin.dashboard'));
    }
}
