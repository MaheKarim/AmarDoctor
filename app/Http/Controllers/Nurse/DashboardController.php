<?php

namespace App\Http\Controllers\Nurse;


use App\SiteSettings;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = User::find(Auth::id());
        $settings = SiteSettings::find(1);
       return view('backend.multi-dashboard.nurse._home_nurse', compact('data', 'settings'));
    }
}
