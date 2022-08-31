@extends('doctors.layout')
@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" style="text-align:center; margin-left: 500px;">ADD NEW DOCTORS FORM </a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('doctors.index')}}">BACK</a>
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
    <form action="{{route('doctors.store')}}" method="POST" enctype="multipart/form-data" style="margin-top:20px;">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Phone</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Education</strong>
                    <input type="text" name="education" class="form-control" placeholder="Education">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Specialist</strong>
                    <input type="text" name="specialist" class="form-control" placeholder="Specialist">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Experence</strong>
                    <input type="text" name="experence" class="form-control" placeholder="Experence">

                </div>
            </div>

 
            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Detail</strong>
                    <textarea class="form-control" style="height: 150px;" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>  

            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control"  placeholder="image">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:20px; margin-left: 500PX;">
                <button type="Submit" class="btn btn-primary">SUBMIT FORM</button>
            </div>
            
             

        </div>
    </form>
        
    
@endsection