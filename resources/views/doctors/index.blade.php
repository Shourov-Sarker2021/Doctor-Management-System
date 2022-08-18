@extends("doctors.layout")
@section('content')
<div class="row" style="margin-top:20px;">
    <div style="col-lg-12 margin-tb">
        <h4>All Doctors Image Showing.</h4>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('doctors.create')}}">
            Add New Doctors.
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
    <tr>
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
                    <a class="btn btn-info" href="{{ route('doctors.show', $doctor->id) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('doctors.edit', $doctor->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $doctors->links()!!}
@endsection