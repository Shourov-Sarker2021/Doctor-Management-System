<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::latest()->paginate(5);
        return view('doctors.index', compact('doctors'))
           ->with('i',(request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
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
             'email'=>'required', 
             'phone'=>'required', 
             /*'education'=>'required', 
             'specialist'=>'required', 
             'experence'=>'required',*/ 
            'detail'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,giv,svg',
        ]);
 
         $input=$request->all();
         $image = $request->file('image');
         
         
        if($image = $request->file('image')){
            $destinationPath="images/";
            $profileImage=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image']="$profileImage";


        }
        Doctor::create($input);
        /*return "Doctors Created Successfully";*/ 
        return redirect()->route("doctors.index")
         ->with("success", "Product Created Successfully"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name'=>'required', 
            'detail'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,giv,svg',
        ]);
 
         $input=$request->all();
         $image = $request->file('image');
         
         
        if($image = $request->file('image')){
            $destinationPath="images/";
            $profileImage=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = $profileImage;


        } 
        else{
            $input['image']=  $doctor->image;
            unset($input[ 'image']);
        }
        $doctor->update($input);
        /*return " Product Created Successfully"; */
        return redirect()->route("doctors.index")
         ->with("success","Information Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route("doctors.index")
        ->with("success","Doctors Deleted Successfully!!!");
    }
}
