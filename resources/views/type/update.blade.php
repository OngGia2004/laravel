@extends('admin.layout')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">THỂ LOAI
                            <small></small>
                        </h1>
                    </div>
                    @if(Session::has('alert'))
                    <div class="alert alert-danger">{{Session::get('alert')}}</div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="type/update/{{$list_type->id}}" method="POST"enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" value='{{$list_type->name}}'/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" placeholder="Please Enter Password" value='{{$list_type->description}}'/>
                            </div>
                            <button type="submit" class="btn btn-default">Chỉnh Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
 </div>
        <!-- /#page-wrapper -->
@endsection
        