<?php

namespace App\Http\Controllers;

use App\AdminForm;
use Illuminate\Http\Request;

class AdminFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('backend.custom-information.add_information');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Code
//        $validatedData = $request->validate([
//            'patient_name' => 'required|max:255',
//            'patient_number' => 'integer|max:13',
//            'amount' => 'integer|min:1|max:10'
//        ]);
        // Store Data
        $adminForms = new AdminForm();
        $adminForms->hospital_name = $request->hospital_name;
        $adminForms->patient_name = $request->patient_name;
        $adminForms->patient_number = $request->patient_number;
        $adminForms->doctor_name = $request->doctor_name;
        $adminForms->amount = $request->amount;
        $adminForms->remarks = $request->hospital_name;
        $adminForms->appoint_date = $request->appoint_date;
        $adminForms->save();

        session()->flash('success','Custom Data Save Successfully!');

        return redirect(route('showCustomData'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminForm  $adminForm
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        //
        $data = [ ];
        $data['adminForms'] = AdminForm::all();
        return view('backend.custom-information.show_customInformation', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminForm  $adminForm
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $data = [ ];
        $data['data'] =  AdminForm::find($id);
        return view('backend.custom-information.edit_custominfo', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminForm  $adminForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminForm $adminForm)
    {
        // Validation Code
//        $validatedData = $request->validate([
//            'patient_name' => 'required|max:255',
//            'patient_number' => 'integer|max:13',
//            'amount' => 'integer|min:1|max:10'
//        ]);
        $adminForms = AdminForm::findOrfail($request)->first();
        $adminForms->hospital_name = $request->hospital_name;
        $adminForms->patient_name = $request->patient_name;
        $adminForms->patient_number = $request->patient_number;
        $adminForms->doctor_name = $request->doctor_name;
        $adminForms->amount = $request->amount;
        $adminForms->remarks = $request->remarks;
        $adminForms->appoint_date = $request->appoint_date;
        $adminForms->save();

        session()->flash('success','Custom Data Updated Successfully!');

        return redirect(route('showCustomData'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminForm  $adminForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = [ ];
        $data['adminForms'] = AdminForm::find($id);
        $data['adminForms']->delete();
        session()->flash('success','Custom Data Deleted Successfully!');
        return redirect(route('showCustomData'));
    }
}
