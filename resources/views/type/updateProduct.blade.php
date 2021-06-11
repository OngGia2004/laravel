@extends('admin.layout')
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>{{$product->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}} <br/>
                                    @endforeach
                                </div> 
                        @endif
                        @if(session("alert"))
                            <div class="alert alert-success">
                                {{session("alert")}}
                            </div>
                        @endif
                        <form action="type/updateProduct/{{$product->id}}" method="POST"  enctype="multipart/form-data"> 
                        @csrf
                            <div class="form-group">
                                <label>Id_type</label>
                                <select class="form-control"  name="id_type">
                                    @foreach($list_type  as $list)
                                    <option  value="{{$list->id}}">{{$list->name}}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" value="{{$product->name}}" />
                            </div>
                           
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" value="{{$product->description}}"/>
                            </div>
                           <div class="form-group">
                                <label>Unit_Price</label>
                                <input class="form-control" name="unit_price" value="{{$product->unit_price}}" />
                            </div>
                            <div class="form-group">
                                <label>Promotion_Price</label>
                                <input class="form-control" name="promotion_price"    value="{{$product->promotion_price}}" />
                            </div> 
                            <div class="form-group">
                                <label>New</label>
                                <input class="form-control" name="new" value="{{$product->new}}" />
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <input class="form-control" name="unit" value="{{$product->unit}}" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <img src="source/image/image/{{$product->image}}" height="250px" alt="source/image/image/{{$product->image}}">
                                <input class="form-control" name="image" type="file" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection