<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Doctor;
use App\ProductBooking;
use App\User;
use App\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // Code Start From Here
    public function index()
    {
        $data = [ ];
        $data['booking_all'] = Booking::orderBy('created_at', 'desc')->get();
        $data['product_bookings'] = ProductBooking::all();
        $data['mails'] = ContactForm::orderBy('created_at', 'desc')->get();

        return view('backend.admin.dashboard', $data);
    }

    public function showDoctorAll()
    {
        $doctors = Doctor::all();
        return view('backend.admin.alldoctors', compact('doctors'));
    }

    public function showAllUser()
    {

        $details_user = User::where('role_id',4)->get();
        return view('backend.admin.alluser',compact('details_user'));
    }
    public function showAllNurse()
    {
        $details_user = User::where('role_id',3)->get();
        return view('backend.admin.allnurse',compact('details_user'));
    }

    public function destroy ($id)
    {
        User::where('id', $id)->delete();

        session()->flash('warning','User Deleted Successfully!');
        return redirect()->route('admin.showAllUser');
    }

    public function destroyDoctor($id)
    {

        $users = User::where('id', $id)->pluck('id');
        //dd();
        Doctor::whereIn('user_id', $users)->delete();

       // dd($id); 
        $users->delete();

        session()->flash('warning','Doctor Deleted Successfully!');
        return redirect()->route('admin.showAllDoctor');
    }
}
