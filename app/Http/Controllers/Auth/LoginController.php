<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ;

  //  protected $phn_number;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // public function findPhnNnumber()
    // {
    //     $login = request()->input('login');
    //     $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phn_number';
    //     request()->merge([$fieldType=>$login]);
    //     return $fieldType;
    // }


    // public function phn_number()
    // {
    //    // return $this->phn_number;
    //    $loginType = request()->input('phn_number');
    //    $this->phn_number = filter_var($loginType, FILTER_VALIDATE_EMAIL) ? 'email' : 'phn_number';
    //    request()->merge([$this->phn_number => $loginType]);
    //    return property_exists($this, 'phn_number') ? $this->phn_number : 'email';
    // }

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

        } else {
            $this->redirectTo = route('user.dashboard');
        }

         $this->middleware('guest')->except('logout');
        // $this->phn_number = $this->findPhnNnumber();
    }

   

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    //   public function username()
    //   {
    //       return 'username';
    //   }
}
