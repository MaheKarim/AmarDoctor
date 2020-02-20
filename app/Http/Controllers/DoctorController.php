<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Area;
use App\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    // doctor sign up form view
    public function signUpForm()
    {
        $settings = SiteSettings::find(1);
        return view("auth.doctorSignUp", compact('settings'));
    }

    // doctor sign up form submit
    public function signUpFormSubmit(Request $request)
    {
       $request->validate([
            'name' => 'required|max:255|min:6',
            'username' => 'required|unique:users|min:4',
            'phn_number' => 'required|unique:users|min:11',
            'email' => 'unique:users|required',
            'nid_pic' =>  'required|image',
            'bmdc_cer' =>  'required|image',
       ]);
        $user_id = User::insertGetId([
            'role_id' => 2,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phn_number' => $request->phn_number,
            'created_at' => Carbon::now()
        ]);


        if ($request->has('bmdc_cer')){
            $bmdc_cer = $request->file('bmdc_cer')->store('doctor','public');
        }
        if ($request->has('nid_pic')){
            $nid_pic = $request->file('nid_pic')->store('doctor','public');
        }

        Doctor::create([
            'user_id' => $user_id,
            'nid_pic' => $nid_pic,
            'bmdc_cer' => $bmdc_cer,
            'bmdc_reg_no' => $request->bmdc_reg_no,
            'area_name_id' => $request->area_name_id,
            'category_name_id' => $request->category_name_id,
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
          return redirect('/login');
        }

        return "Wel Done Mr Doctor"; // error message
    }


}
