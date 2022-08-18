@extends('doctors.layout')
@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="text-align: center;">
                <h4>Edit Doctor</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('doctors.index')}}">Back</a>
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
    <form action="{{route ('doctors.update',$doctor->id) }}" method="POST" enctype="multipart/form-data" style="margin-top:20px;">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{$doctor->name}}" class="form-control">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control" value="{{$doctor->email}}" placeholder="Email">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Phone</strong>
                    <input type="text" name="phone" class="form-control" value="{{$doctor->phone}}" placeholder="Phone">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Education</strong>
                    <input type="text" name="education" class="form-control" value="{{$doctor->education}}" placeholder="Education">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Specialist</strong>
                    <input type="text" name="specialist" class="form-control" value="{{$doctor->specialist}}" placeholder="Specialist">

                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Experence</strong>
                    <input type="text" name="experence" class="form-control" value="{{$doctor->experence}}" placeholder="Experence">

                </div>
            </div>

 
            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Detail</strong>
                    <textarea class="form-control" style="height: 150px;" name="detail"  placeholder="Detail">{{$doctor->detail}}</textarea>
                </div>
            </div>  

            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control"  placeholder="image">

                    <br>
                    <img src="/images/{{$doctor->image}}" width="100px">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:20px;">
                <button type="Submit" class="btn btn-primary">Update Information</button>
            </div>
            
             

        </div>
    </form>
        
    
@endsection