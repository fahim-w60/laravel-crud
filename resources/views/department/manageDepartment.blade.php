@extends('master')
@section('title')
    Manage Department
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Manage Department</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Action</th>
                            </tr>
                            @foreach($departments as $dept)
                            <tr>
                                <td>{{$dept->id}}</td>
                                <td>{{$dept->department_name}}</td>
                                <td>{{$dept->department_code}}</td>
                                <td>
                                    <a href="{{route('edit.dept',['id'=>$dept->id])}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('delete.dept')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="department_id" value="{{$dept->id}}">
                                        <button type="submit" class="btn btn-danger" onclick="return('Are You Sure Want To Delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection