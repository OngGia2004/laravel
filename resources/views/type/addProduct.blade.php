@extends('admin.layout')
@section('content')
   <!-- Page Content -->
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('alert'))
                    <div class="alert alert-success">{{Session::get('alert')}}</div>
                    @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="type/addProduct" method="POST" enctype="multipart/form-data">
                        @csrf
                            
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name"  />
                            </div>
                            <div class="form-group">
                                <label>id_type</label>              
                                <select class="form-control" name="id_type">
                                    @foreach($list_type as $list)
                                    <option value="{{$list->id}}">{{$list->name}}</option>
                                    @endforeach                                   
                                </select>                      
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description"/>
                            </div>
                           <div class="form-group">
                                <label>Unit_Price</label>
                                <input class="form-control" name="unit_price"  />
                            </div>
                            <div class="form-group">
                                <label>Promotion_Price</label>
                                <input class="form-control" name="promotion_price"  />
                            </div> 
                            <div class="form-group">
                                <label>New</label>
                                <input class="form-control" name="new" />
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <input class="form-control" name="unit" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" name="image" type="file" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        <!-- /#page-wrapper -->
@endsection