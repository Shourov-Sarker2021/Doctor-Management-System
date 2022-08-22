<?php

namespace App\Http\Controllers;

use App\Models\Apointment;
use Illuminate\Http\Request;

class ApointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apointments=Apointment::latest()->paginate(5);
        return view('apointments.index', compact('apointments'))
           ->with('i',(request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apointments.create');
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
            'name'=>'required',
             'phone'=>'required', 
             'address'=>'required',
             'age'=>'required', 
            'apointment_date'=>'required', 
             /*'apointment_time'=>'required', 
            'doctor_name'=>'required',
            'details'=>'required', */
            ]);

        $input=$request->all();
        Apointment::create($input);
        /*return "Apointment Created Successfully";*/
        return redirect()->route("apointments.index")
         ->with("success", "Apointment Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function show(Apointment $apointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apointment $apointment)
    {
        return view('apointments.edit',compact('apointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apointment $apointment)
    {
       $request->validate([
            'name'=>'required',
             'phone'=>'required', 
             'address'=>'required',
             'age'=>'required', 
            'apointment_date'=>'required', 
             /*'apointment_time'=>'required', 
            'doctor_name'=>'required',
            'details'=>'required', */
            ]);
 
         $input=$request->all();
          
         
         
         


        
        
        $apointment->update($input);
        /*return " Product Created Successfully"; */
        return redirect()->route("apointments.index")
         ->with("success","Information Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apointment  $apointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apointment $apointment)
    {
        $apointment->delete();
        return redirect()->route("apointments.index")
        ->with("success","Apointment Deleted Successfully!!!");
    }
}
