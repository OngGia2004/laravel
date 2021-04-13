@extends("buoi5.layout")
@section("content")
@if (! isset($tien))
    {{$csm=""}}
    {{$csc=""}}
    {{$dg=""}}
    {{$tien=""}}
@endif
<h1>Thanh toán tiên điện</h1>
<form action="{{route('tiendien')}}" method="post">
    {{csrf_field()}}
    <div class="row mb-3">
        <label for="txt1" class="col-sm-3 col-form-label">Tên Chủ Hộ</label>
        <div class="col-sm-9"><input type="text" name="hotench" class="form-control" id="txt1" placeholder="your name"></div>    
    </div>
    <div class="row mb-3">
        <label for="txt2" class="col-sm-3 col-form-label">Chỉ số cũ</label>
        <div class="col-sm-9"><input type ="number" name="csc" min="0" class="form-control" id="txt2" value="{{$csc}}"></div>
    </div>
    <div class="row mb-3">
        <label for="txt3" class="col-sm-3 col-form-label">Chỉ số mới</label>
        <div class="col-sm-9"><input type="number" name="csm" min="0" class="form-control" id="txt3" value="{{$csm}}"></div>
    </div>
    <div class="row mb-3">
        <label for="txt4" class="col-sm-3 col-form-label"> Đơn Gía</label>
        <div class="col-sm-9"><input type="number" name="dongia" min="0" class="form-control" id="txt4" value="{{$dg}}"></div> 
    </div>
    <div class="row mb-3">
        <label for="txt5" class="col-sm-3 col-form-label">Số tiền thanh toán</label>
        <div class="col-sm-9"><input type="text" name="thanhtoan" class="form-control" style="color:red" id="txt5" disable value="{{$tien}}"></div>
    </div>
    <button type="submit" class="btn btn-primary">Tính tiền điện</button>
</form>
@endsection
