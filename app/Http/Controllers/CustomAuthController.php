<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use AuthenticatesUsers;
class CustomAuthController extends Controller
{

    // start
    public function showPage(){
        return view('custom.login');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request ->email, 'password' => $request->password]))
        {
            return redirect(route('doctor.dashboard'));
        }

    }

}


