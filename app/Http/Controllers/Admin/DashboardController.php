<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
       return view('backend.admin.dashboard');
    }

    public function changePassForm()
    {
        $data = [ ];
        return view('backend.admin.change_pass');
    }
}
