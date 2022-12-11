@extends('master')

@section('title')
    Edit Student
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Edit Student</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$student->id}}" name="student_id">
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Student Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control" value="{{$student->phone}}" name="phone" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{$student->email}}" name="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department Name</label>
                                <input type="text" class="form-control" value="{{$student->dept_id}}" name="dept_id" placeholder="Department Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Section Name</label>
                                <input type="text" class="form-control" name="sec_id" value="{{$student->sec_id}}" placeholder="Section Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control"  id="" cols="30" rows="7">{{$student->address}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{asset($student->image)}}" alt="" class="img-fluid">
                            </div>
                            <input type="submit" class="form-control btn btn-primary" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection