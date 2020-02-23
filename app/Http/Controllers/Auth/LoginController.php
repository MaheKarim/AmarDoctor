<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\SiteSettings;
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

   // protected $redirectTo = $this->authenticated();

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


    public function field()
    {
        if (filter_var(request()->phn_number,FILTER_VALIDATE_EMAIL)){
            return 'email';
        }else{
            return 'phn_number';
        }
    }
    public function login()
    {
        // Check Right Position
        //  return $this->field();
        if (Auth::attempt([$this->field() => request()->phn_number, 'password' => request()->password])) {

            return redirect()->intended(url('/'));
        } else {
            return redirect()->back()->withInput('phn_number');
        }
    }

    public function showUserLoginForm()

    {
        $settings = SiteSettings::find(1);
        return view('auth.login', ['url' => 'user'], compact('settings'));
    }

    public function userLogin(Request $request)
    {
//        $this->validate($request, [
//            'email'   => 'required|email',
//            'password' => 'required|min:6'
//        ]);

        if (Auth::guard('user')->attempt(['phn_number' => $request->phn_number, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('search.doctor');
        }
        return back()->withInput('phn_number');
    }

}
