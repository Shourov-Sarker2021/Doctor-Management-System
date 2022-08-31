@extends("apointments.layout")
@section('content')
<div class="row" style="margin-top:20px;">

    <div style="col-lg-12 margin-tb; text-align: center; ">
        <a class="btn btn-primary">ALL APOINTMENT LIST.</a>
    </div>
   
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('apointments.create')}}">
            ADD NEW APOINTMENT.
        </a>
    </div>

    <div class="pull-right">
        <a class="btn btn-success" style="margin-top: 10px;" href="http://127.0.0.1:8000/dashboard">
            BACK TO DASHBOARD.
        </a>
    </div>

     
</div>
<br>

@if($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<table class="table table-border" style="margin-top:30px; background-color:greenyellow;">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Age</th>
        <th>Address</th>
        <th>Apointment Date</th>
        <th>Apointment Time</th>
        <th>Doctor Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($apointments as $apointment)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $apointment->name }}</td>
            <td>{{ $apointment->phone }}</td>
            <td>{{ $apointment->age }}</td>
            <td>{{ $apointment->address }}</td>
            <td>{{ $apointment->apointment_date }}</td>
            <td>{{ $apointment->apointment_time }}</td>
            <td>{{ $apointment->doctor_name }}</td>
            <td>{{ $apointment->details }}</td>
             
            <td>
                <form action="{{ route('apointments.destroy',$apointment->id)}}" method="POST">
                    <a class="btn btn-info" href="{{ route('apointments.show', $apointment->id) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('apointments.edit', $apointment->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $apointments->links()!!}
@endsection