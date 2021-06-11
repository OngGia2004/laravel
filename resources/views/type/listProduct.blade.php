@extends('admin.layout')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">sản phẩm
                            <small>DANH SÁCH</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(Session::has('alert'))
                    <div class="alert alert-danger">{{Session::get('alert')}}</div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Id_Type</th>
                                <th>Description</th>
                                <th>Unit_Price</th>
                                <th>Prom0tion_price</th>
                                <th>New</th>
                                <th>Unit</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $pro)
                            <tr class="odd gradeX" align="center">
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->name}}</td>
                                <td>{{$pro->id_type}}</td>
                                <td>{{$pro->description}}</td>
                                <td>{{number_format($pro->unit_price)}}</td>
                                <td>{{number_format($pro->promotion_price)}}</td>
                                <td>{{$pro->new}}</td>
                                <td>{{$pro->unit}}</td>
                                <td><img src="source/image/image/{{$pro->image}}"height="50px"></td>                              
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="type/deleteProduct/{{$pro ->id}}"> Delete</a></td>                                                 
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="type/updateProduct/{{$pro ->id}}">Edit</a></td>
                            </tr> 
                            @endforeach 
                        </tbody>
                        
                    </table>
                    {{$product->links()}}
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        
        <!-- /#page-wrapper --
@endsection