<?php

namespace App\Http\Controllers\User;

use App\Booking;
use App\ProductBooking;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $codes = User::where('id', Auth::id())->get();
        $bookings = Booking::where('user_id', Auth::id())->get();
        $product_bookings = ProductBooking::where('user_id', Auth::id())->get();
       return view('backend.multi-dashboard.user._home_user', compact('bookings', 'product_bookings', 'codes'));
    }
}
