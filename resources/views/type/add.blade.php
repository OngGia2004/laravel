@extends('admin.layout')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">THỂ LOẠI
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                    @if(session('alert'))
                        <div class="alert alert-success">
                            {{session('alert')}}
                        </div>
                    @endif
                        <form action="type/add" method="POST">
                        @csrf
                        
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username"  />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" placeholder="Please Enter  description" />
                            </div>
                        
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection