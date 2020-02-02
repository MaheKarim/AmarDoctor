<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class CustomAuthController extends Controller
{
    use AuthenticatesUsers;
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


