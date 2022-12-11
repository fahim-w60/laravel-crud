@extends('master')
@section('title')
    Manage Section
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Manage Section</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Section Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach($sections as $sec)
                            <tr>
                                <td>{{$sec->id}}</td>
                                <td>{{$sec->section_name}}</td>
                                <td>
                                    <a href="{{route('edit.section',['id'=>$sec->id])}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('delete.section')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="section_id" value="{{$sec->id}}">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure Want To Delete?')">Delete</button>
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