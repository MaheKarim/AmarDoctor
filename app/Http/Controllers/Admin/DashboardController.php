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

    public function showDoctorAll()
    {
        $data = User::where('role_id', 2)->get();
       // $details = Doctor::where('user_id', $data->id)->first();


        return view('backend.admin.alldoctors', compact('data'));
    }

    public function showAllUser()
    {
        $details_user = User::where('role_id',4)->get();

        return view('backend.admin.alluser',compact('details_user'));
    }
}
