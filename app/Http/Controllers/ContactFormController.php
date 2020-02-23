<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    // Code Start Here
    public function create ()
    {
        $settings = SiteSettings::find(1);
        return view('frontend.contact.create', compact('settings'));
    }

    public function store ()
    {
        $data = request()->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phn' =>  'required|min:6|max:15',
            'customer_address' => 'required|min:5',
            'customer_message' => 'required',
        ]);
        // dd($request->all());
        // Send An Email
        Mail::to('info@amardoctor.com.bd')->send(new ContactFormMail($data));
        return redirect(route('contact.form'));
    }
}
