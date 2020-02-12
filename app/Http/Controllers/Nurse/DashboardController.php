<?php

namespace App\Http\Controllers\Nurse;


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
       return view('backend.multi-dashboard.nurse._home_nurse', compact('data'));
    }
}
