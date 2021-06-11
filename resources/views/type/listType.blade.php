@extends('admin.layout')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">THỂ  LOẠI
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('alert'))
                    <div  class="alert alert-danger">{{Session::get('alert')}}</div>
                    @endif
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Delete</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_type  as $list)
                            <tr class="odd gradeX" align="center">
                                <td>{{$list->id}}</td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->description}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="type/delete/{{$list->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="type/update/{{$list->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection