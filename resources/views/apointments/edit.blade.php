 @extends('apointments.layout')
@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="text-align: center;">
                <h4>Edit Apointment Page.</h4>
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
    <form action="{{ route('apointments.update',$apointment->id) }}" method="POST" enctype="multipart/form-data" style="margin-top:20px;">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" value="{{$apointment->name}}">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Phone</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Phone"  value="{{$apointment->phone}}">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{$apointment->address}}">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Age</strong>
                    <input type="text" name="age" class="form-control" placeholder="Age" value="{{$apointment->age}}">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Apointment Date</strong>
                    <input type="text" name="apointment_date" class="form-control" placeholder="Apointment Date" value="{{$apointment->apointment_date}}">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Apointment Time</strong>
                    <input type="text" name="apointment_time" class="form-control" placeholder="Apointment Time" value="{{$apointment->apointment_time}}">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Doctor Name</strong>
                    <input type="text" name="doctor_name" class="form-control" placeholder="Doctor Name" value="{{$apointment->doctor_name}}">

                </div>
            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Details</strong>
                    <textarea class="form-control" style="height: 150px;" name="details" placeholder="Details" value="{{$apointment->details}}"></textarea>
                </div>
            </div>  

            

             
            
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:10px;">
                <button type="Submit" class="btn btn-primary">Update Information  </button>
            </div>
            
             

        </div>
    </form>
        
    
@endsection