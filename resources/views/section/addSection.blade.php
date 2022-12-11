@extends('master')
@section('title')
    Add Section
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;">Add Section</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.section')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Section Name</label>
                                <input type="text" class="form-control" name="section_name" placeholder="Section Name">
                            </div>
                            <button type="submit" class="btn btn-primary form-control" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection