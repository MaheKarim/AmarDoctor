<?php

namespace App\Http\Controllers\Admin;

use App\NursingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NursingServiceController extends Controller
{
    public function index()
    {
        // show the all nursing service page
        $data = [ ];
        $data['nursing_service'] = NursingService::latest()->get();

        return view('backend.nursing_service.show_nursing_service', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create page

        return view('backend.nursing_service.create_nursing_service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nursingservice_name' => 'required|min: 4|unique:nursing_services'
        ]);
        // add to database
        $nursing_service = new NursingService();
        $nursing_service->nursingservice_name = $request->nursingservice_name;
        $nursing_service->save();

        session()->flash('success', 'Nursing Service Created Successfully!');
        return redirect()->route('admin.nursing_service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NursingService  $nursingService
     * @return \Illuminate\Http\Response
     */
    public function show(NursingService $nursingService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NursingService  $nursingService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [ ];
        $data['nursing_service'] = NursingService::find($id);

        return view('backend.nursing_service.edit_nursingservice' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NursingService  $nursingService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NursingService $nursingService)
    {
        // update
       $request->validate([
           'nursingservice_name' => 'required|min: 4|unique:nursing_services'
       ]);
       $nursingService = NursingService::findOrfail($request)->first();
       $nursingService->nursingservice_name = $request->nursingservice_name;
       $nursingService->save();

       session()->flash('success','Nursing Service Successfully Updated!');
       return redirect(route('admin.nursing_service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NursingService  $nursingService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete option
        NursingService::where('id', $id)->delete();

        session()->flash('warning', 'Nursing Service Deleted Successfully!');
        return redirect()->route('admin.nursing_service.index');
    }
}
