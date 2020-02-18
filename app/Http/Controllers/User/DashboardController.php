<?php

namespace App\Http\Controllers\User;

use App\Booking;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
       $bookings = Booking::where('user_id', Auth::id())->get();
       return view('backend.multi-dashboard.user._home_user', compact('bookings'));
    }
}
