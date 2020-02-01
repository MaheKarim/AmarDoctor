<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    // start
    public function showPage(){
        return view('custom.login');
    }

    public function login()
    {

    }
}
