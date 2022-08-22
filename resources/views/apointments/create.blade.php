@extends('apointments.layout')
@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="text-align:center;">
                <a class="btn btn-primary">New Apointment Create Form</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('apointments.index')}}">Back</a>
            </div>
        </div>    
    </div>

     @if($errors->any())
        <div class="alert alert-danger">
            <strong>Woops@</strong>There were some problem in your input.<br><br>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>    
            @endforeach
        </div>
    @endif 
    <form action="{{route('apointments.store')}}" method="POST" enctype="multipart/form-data" style="margin-top:20px;">
        @csrf
        
        <div class="row">
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Name" aria-label="Name">
            </div>
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Phone" aria-label="Phone">
            </div>

        </div>
        <div class="row">
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Address" aria-label="Address">
            </div>
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Age" aria-label="Age">
            </div>
            
        </div>
        <div class="row">
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Apointment Date" aria-label="Apointment Date">
            </div>
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Apointment Time" aria-label="Apointment Time">
            </div>
            
        </div>
        <div class="row">
            <div class="col" style="margin-top:10px;">
                 <!--<input type="text" class="form-control" placeholder="Doctor Name" aria-label="Doctor Name"> --> 
                <select class="form-select" aria-label="Default select example">
                      <option selected>Select Doctor Name</option>
                      <option value="1">Onik</option>
                      <option value="2">Tuton</option>
                      <option value="3">Tablet</option>
                </select>
            </div>
            <div class="col" style="margin-top:10px;">
                <input type="text" class="form-control" placeholder="Details" aria-label="Details">
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:10px; text-align: center;">
                <button type="Submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
        
    
@endsection