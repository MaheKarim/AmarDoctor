<?php

namespace App\Http\Controllers;

use App\DoctorContact;
use Illuminate\Http\Request;
use App\SiteSettings;

class DoctorContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // start from here
        $settings = SiteSettings::find(1);
        return view('frontend.contact.doctor_contact', compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Code Start
        $data = request()->validate([
            'dContact_name' => 'required',
            'dContact_email' => 'required|email',
            'dContact_phn' =>  'required|min:6|max:15',
            'dContact_address' => 'required|min:5',

        ]);
        // dd($request->all());
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

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorContact  $doctorContact
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorContact $doctorContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorContact  $doctorContact
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorContact $doctorContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorContact  $doctorContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorContact $doctorContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorContact  $doctorContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorContact $doctorContact)
    {
        //
    }
}
