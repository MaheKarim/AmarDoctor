<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;
use Auth;
use AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
    public function passwordChange()
    {
        return view('backend.multi-dashboard.doctor.change_password');
    }

    public function FormPassChange(Request $request)
    {
        $this->validate($request,[
            'oldpassword' => 'required',
            'password' => 'confirmed'
        ]);
        
        $hashedPassword = Auth::User()->password;
        if(Hash::check($request->oldpassword,$hashedPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('success','Password Change Succesfully!');
        } else {
            return redirect()->back()->with('errorMSG' ,  'Current Password Invalid!');
        }
    }
}
