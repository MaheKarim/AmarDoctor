<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\SiteSettings;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    protected $redirectTo ;



    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1 )
        {
           $this->redirectTo = route('admin.dashboard');

        } elseif(Auth::check() && Auth::user()->role->id == 2 )
        {
            $this->redirectTo = route('doctor.dashboard');

        } elseif(Auth::check() && Auth::user()->role->id == 3 )
        {
            $this->redirectTo = route('nurse.dashboard');

<<<<<<< HEAD
        } else {
            $this->redirectTo = route('search.doctor');
=======
        } elseif (Auth::check() && Auth::user()->role->id == 4)
        {
            $this->redirectTo = route('search.doctor');
        }
        else {
            $this->redirectTo = url('/');
>>>>>>> 6ecc749e3fa73c2f636720ade1afe531038cb94a
        }
         $this->middleware('guest')->except('logout');

    }

<<<<<<< HEAD

=======
>>>>>>> 6ecc749e3fa73c2f636720ade1afe531038cb94a

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
