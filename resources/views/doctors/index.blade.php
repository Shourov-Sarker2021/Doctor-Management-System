@extends("doctors.layout")
@section('content')
<div class="row" style="margin-top:20px;">

    <div class="pull-right">
        <a class="btn btn-primary" style="text-align:center; margin-left: 500px;">ALL DOCTORS LIST.</a>
    </div>

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('doctors.create')}}">
            ADD NEW DOCTORS.
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

<table class="table table-bordered" style="margin-top:30px;">

    
    <tr style="background-color: skyblue;">
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Education</th>
        <th>Speciality</th>
        <th>Experence</th>
        <th>Details</th>
        <th>Image</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($doctors as $doctor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>{{ $doctor->education }}</td>
            <td>{{ $doctor->speciality }}</td>
            <td>{{ $doctor->experence }}</td>
            <td>{{ $doctor->detail }}</td>
            <td><img src="/images/{{$doctor->image}}" width="100px"></td>
            <td>
                <form action="{{ route('doctors.destroy',$doctor->id)}}" method="POST">
                    <a class="btn btn-info"  href="{{ route('doctors.show', $doctor->id) }}">Detail</a>
                    <a class="btn btn-primary" style="margin-top:5px;" href="{{ route('doctors.edit', $doctor->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="margin-top:5px;"class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $doctors->links()!!}
@endsection