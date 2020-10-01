<?php

namespace App\Http\Controllers;

use App\DoctorContact;
use Illuminate\Http\Request;
use App\SiteSettings;

class DoctorContactController extends Controller
{

    public function create()
    {
        // start from here
        $settings = SiteSettings::find(1);
        return view('frontend.contact.doctor_contact', compact('settings'));
    }


    public function store(Request $request)
    {
        // Code Start
        $data = request()->validate([
            'dContact_name' => 'required',
            'dContact_email' => 'required|email',
            'dContact_phn' =>  'required|min:6|max:15',
            'dContact_address' => 'required|min:5',

        ]);

        // Send An Email
        $mails = new DoctorContact();
        $mails->dContact_name = $request->dContact_name;
        $mails->dContact_email = $request->dContact_email;
        $mails->dContact_phn = $request->dContact_phn;
        $mails->dContact_address = $request->dContact_address;
        $mails->save();

        session()->flash('message', 'Thanks, For Your Message. We\'ll be in touch.');
        return redirect(route('contact.doctor_form'));
    }



}
