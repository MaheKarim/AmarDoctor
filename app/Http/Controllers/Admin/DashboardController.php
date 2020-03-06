<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Doctor;
use App\DoctorContact;
use App\Exports\DoctorsExport;
use App\ProductBooking;
use App\User;
use App\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\UserExports;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    // Code Start From Here
    public function index()
    {
        $data = [ ];
        $data['booking_all'] = Booking::orderBy('created_at', 'desc')->get();
        $data['product_bookings'] = ProductBooking::all();
        $data['mails'] = ContactForm::orderBy('created_at', 'desc')->get();
        $data['doctors_contact'] = DoctorContact::latest()->get();

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
        Doctor::whereIn('user_id', $users)->delete();
        $users->delete();

        session()->flash('warning','Doctor Deleted Successfully!');
        return redirect()->route('admin.showAllDoctor');
    }

    public function exportUser(Request $request)
    {
    //  Code for 3.1.19 version
        return Excel::download(new UserExports, 'users.xlsx');
    }
    public function exportDoctor(Request $request)
    {
    //  Code for 3.1.19 version
        return Excel::download(new DoctorsExport, 'doctors.xlsx');
    }

    public function destroyDoctorReq ($id)
    {
        DoctorContact::where('id', $id)->delete();

        session()->flash('warning','Doctor Service Request Deleted Successfully!');
        return redirect()->route('admin.dashboard');
    }
}
