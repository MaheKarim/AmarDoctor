<?php

namespace App\Http\Controllers\Doctor;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class DashboardController extends Controller
{
    //  dashboard for Doctor

    public function index()
    {

       return view('backend.multi-dashboard.doctor._home_doctor');
    }

    public function profile_seetings()
    {
        $data = User::find(Auth::id());
        return view('backend.multi-dashboard.doctor._profile_seetings', compact('data'));
    }

    // update profile picture
    public function updateProfilePic(Request $request)
    {
        // validation
        if($request->has('profile_pic')){
            // upload new image
            $image = $request->file('profile_pic')->store('doctor', 'public');

            // delete previous image
            Storage::delete('public/'.User::find(Auth::id())->profile_image);

            // insert image path to database
            User::find(Auth::id())->update([
                'profile_image'=> $image
            ]);
            return back();
        }
    }

    // Password Change

    public function changeDoctorPass()
    {
         return view('backend.multi-dashboard.doctor.change_password');
    }

    public function changePassForm(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
//        \session()->flash('success','Products Delete Successfully');

        return redirect()->back()->with("success","Password changed successfully !");
    }
}
