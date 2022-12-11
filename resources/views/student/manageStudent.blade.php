@extends('master')
@section('title')
    Manage Student
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <table class="table table-striped">
                    <tr>
                        <th>sl</th>
                        <th>Student Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Department Name</th>
                        <th>Section Name</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->dept_id}}</td>
                        <td>{{$student->sec_id}}</td>
                        <td>{{$student->address}}</td>
                        <td>
                            <img src="{{$student->image}}" alt="" class="img-fluid">
                        </td>
                        <td>
                            <a href="{{route('edit.student',['id'=>$student->id])}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('student.delete')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="student_id" value="{{$student->id}}">
                                <button type="submit" onclick="return confirm('Are You Sure Want to Delete?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection