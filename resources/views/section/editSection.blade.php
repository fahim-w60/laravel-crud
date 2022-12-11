@extends('master')
@section('title')
    Edit Section
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Edit Section</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.section')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="section_id" value="{{$section->id}}">
                        <div class="mb-3">
                            <label class="form-label">Section Name</label>
                            <input type="text" name="section_name" value="{{$section->section_name}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection