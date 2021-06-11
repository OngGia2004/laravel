@extends('admin.layout')
@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">DANH SÁCH ĐƠN ĐẶT HÀNG
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>Mã Đặt Đơn</th>
                                <th>Ngày Đặt Hàng</th>
                                <th>Tên Khách Hàng</th>
                                <th>Tổng Tiền</th>
                                <th>Hình Thức Thanh Toán</th>
                                <th>Ghi Chú</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bill as $bil)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bil->id}}</td>
                                <td>{{$bil->date_order}}</td>
                                <td>{{$bil->name}}</td>
                                <td>{{$bil->total}}</td>
                                <td>{{$bil->payment}}</td>
                                <td>{{$bil->note}}</td>
                                <td>{{$bil->state==0? "Chưa giao hang" : "Đã giao hàng"}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/updatebill/{{$bil->id}}">Cập Nhât</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                <!-- /.row -->
            <!-- /.container-fluid -->
        <!-- /#page-wrapper -->
@endsection