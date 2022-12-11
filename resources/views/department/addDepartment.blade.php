@extends('master')
@section('title')
    Add Department
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Add Department</h1>
                    </div>
                
                <div class="card-body">
                    <form action="{{route('save.dept')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label class="form-label">Department Name</label>
                                <input type="text" class="form-control" name="department_name" placeholder="Department Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department Code</label>
                                <input type="text" class="form-control" name="department_code" placeholder="Department Code">
                            </div>
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection