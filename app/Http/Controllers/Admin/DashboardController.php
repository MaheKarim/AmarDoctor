<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Code Start From Here
    public function index()
    {
        $data = [ ];
        $data['booking_all'] = Booking::all();
       return view('backend.admin.dashboard', $data);
    }

    public function status_change($id)
    {
        return view('backend.admin.status');
    }

    public function status_only(Request $request)
    {

    }
}
