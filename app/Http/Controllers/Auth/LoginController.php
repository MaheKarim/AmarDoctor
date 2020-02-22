<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\SiteSettings;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated (Request $request, $user)
    {
        if (Auth::check() && Auth::user()->role->id == 1 ) {
            $this->redirectTo = route('admin.dashboard');

        } elseif(Auth::check() && Auth::user()->role->id == 2 ) {
            $this->redirectTo = route('doctor.dashboard');

        } elseif(Auth::check() && Auth::user()->role->id == 3 ) {
            $this->redirectTo = route('nurse.dashboard');

        } else {
            $this->redirectTo = route('search.doctor');
        }
    }


    public function __construct()
    {
         $this->middleware('guest')->except('logout');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showLoginForm()
    {
        $settings = SiteSettings::find(1);
        return view('auth.login', compact('settings'));
    }

}
