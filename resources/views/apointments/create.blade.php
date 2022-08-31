@extends('apointments.layout')
@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                 <a class="btn btn-primary" style="text-align:center; margin-left: 500px;">NEW APOINTMENT CREATE FORM.</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="http://127.0.0.1:8000/dashboard">BACK TO DASHBOARD</a>
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
    <div>    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">

                </div>
            </div>
        </div> 
           
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Phone</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Address">

                </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Age</strong>
                    <input type="text" name="age" class="form-control" placeholder="Age">

                </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Apointment Date</strong>
                   <input type="text" name="apointment_date" class="form-control" placeholder="Apointment Date" id="datepicker">
                 </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Apointment Time</strong>
                   <input type="text" name="apointment_time" class="form-control" placeholder="Apointment Time">

                </div>
            </div>
        </div>    

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="from-group">
                        <strong>Doctor Name</strong>
                         
                        <!-- <input type="text" name="doctor_name" class="form-control" placeholder="Doctor_Name"> --> 

                         <select class="form-select" aria-label="Default select example">
                          <option selected>Select Doctor Name</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Details</strong>
                    <textarea class="form-control" style="height: 150px;" name="details" placeholder="Details"></textarea>
                </div>
            </div>  

            

             
            
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:10px;">
                <button type="Submit" class="btn btn-primary" style="margin-left:500px;">SUBMIT FORM</button>
            </div>
            
             

    </div>
</form>

@endsection

<!-- 
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
                 <div class="col" style="margin-top:10px;">
                   <div class ="form-group">  
                         <div class = 'input-group date' id='datetimepicker1'>  
                            <input type = 'text' class="form-control" />  
                            <span class = "input-group-addon">  
                            <span class = "glyphicon glyphicon-time"></span>  
                            </span>  
                         </div>  
                      </div> 
                </div>
            </div>
            <div class="col" style="margin-top:10px;">
                   <div class ="form-group">  
                     <div class = 'input-group date' id='datetimepicker3'>  
                        <input type = 'text' class="form-control" />  
                        <span class = "input-group-addon">  
                        <span class = "glyphicon glyphicon-time"></span>  
                        </span>  
                     </div>  
                  </div> 
            </div>
            
        </div>
        <div class="row">
            <div class="col" style="margin-top:10px;">
                 <input type="text" class="form-control" placeholder="Doctor Name" aria-label="Doctor Name">  
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
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
<script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>  
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
<script>  
$(function() {  
  $('#datetimepicker1').datetimepicker();  
});  
</script>  
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">  


<script type = "text/javascript">  
  $(function () {  
      $('#datetimepicker3').datetimepicker({  
          format: 'LT'  
      });  
  });  
</script>   -->