<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = [ ];
        $data['booking_data']= Booking::with('doctor')->latest()->get();
       // dd($data['booking_data']);
       return view('backend.admin.dashboard', $data);
    }

    // public function changePassword()
    // {
    //     $data = [ ];
    //     return view('backend.admin.change_pass');
    // }
}
