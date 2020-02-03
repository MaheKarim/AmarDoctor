<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //  dashboard for Doctor

    public function index()
    {
       return view('backend.multi-dashboard.doctor._home_doctor');
    }

    public function profile_seetings()
    {
        return view('backend.multi-dashboard.doctor._profile_seetings');
    }
}
