@extends('master')
@section('title')
    Edit Department
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">

            
            <div class="card">
                <div class="card-header">
                    <h1 style="text-align: center;">Edit Department</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('update.dept')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="department_id" value={{$dept->id}}>
                        <div class="mb-3">
                            <label class="form-label">Department Name</label>
                            <input type="text" name="department_name" value="{{$dept->department_name}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Department Code</label>
                            <input type="text" name="department_code" value="{{$dept->department_code}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection