@extends('layout.default')

@section('main')

<div class="container mt-4">
    @if(session('success'))
   <p style="color:green;">
    {{ session('success')}}
   </p>
   @endif
<div class="d-flex justify-content-between align-items-center mb-3">
<h2>Student List</h2>
<a href="{{route('student.create')}}" class="btn btn-primary">Add Student</a>
</div>
<table class="table table-bordered table-striped table-hover">
<thead class="table-dark">
    <tr>
        <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Course</th>
                <th>Actions</th>

    </tr>
</thead>
<tbody>
    @foreach($students as $student)
    <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->age}}</td>
    <td>{{$student->course}}</td>
    <td>
        <a href="{{route('student.edit',$student->id)}}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{route('student.destroy',$student->id)}}" method="POST" class="d-inline" >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure Do you want to delete this Student')">Delete</button>
        </form>
    </td>
</tr>

    @endforeach
</tbody>
</table>
</div>
@endsection


