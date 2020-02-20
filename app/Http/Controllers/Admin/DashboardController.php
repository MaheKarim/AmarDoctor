<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Code Start From Here
    public function index()
    {
        $data = [ ];
        $data['booking_all'] = Booking::orderBy('created_at', 'desc')->get();
        return view('backend.admin.dashboard', $data);
    }

    public function status_change($id)
    {
        return view('backend.admin.status');
    }

    public function showDoctorAll()
    {
        $doctors = Doctor::all();
        return view('backend.admin.alldoctors', compact('doctors'));
    }

    public function showAllUser()
    {
        $details_user = User::where('role_id',4)->get();
        return view('backend.admin.alluser',compact('details_user'));
    }
    public function showAllNurse()
    {
        $details_user = User::where('role_id',3)->get();
        return view('backend.admin.allnurse',compact('details_user'));
    }
}
