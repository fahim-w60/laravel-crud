@extends('master')

@section('title')
    Add Student
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Add Student</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Student Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department Name</label>
                                <!-- <input type="text" class="form-control" name="dept_id" placeholder="Department Name"> -->
                                <select name="dept_id" id="" class="form-control">
                                    @foreach($dept as $dep)
                                    <option value="{{$dep->id}}">{{$dep->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Section Name</label>
                                <!-- <input type="text" class="form-control" name="sec_id" placeholder="Section Name"> -->
                                <select name="sec_id" id="" class="form-control">
                                    @foreach($sec as $se)
                                    <option value="{{$se->id}}">{{$se->section_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control" id="" cols="30" rows="7"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <input type="submit" class="form-control btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection