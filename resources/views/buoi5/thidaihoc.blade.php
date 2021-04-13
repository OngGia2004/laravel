@extends('buoi5.layout');
@section('content')
@if (! isset($x) && ! isset($td))
    {{$t = ""}}
    {{$l = ""}}
    {{$h = ""}}
    {{$dc = ""}}
    {{$td = ""}}
    {{$x = ""}}
@endif
<h1 align="center">Kết quả thi đại học</h1>
<form action="{{route('thidaihoc')}}" method="post">
{{csrf_field()}}
    <div class="row mb-3">
        <label for="x1" class="col-sm-3 col-form-label">Toán</label>
        <div class=" col-sm-9"><input type="number" name="toan"  value="{{$t}}" class="form-control" require min="0" id="x1" ></div>
    </div>
    <div class="row mb-3">
        <label for="x2" class="col-sm-3 col-form-label">Lý</label>
        <div class="col-sm-9"><input type="number"name="ly" min="0"  class="form-control " id="x2" value="{{$l}}"></div>
    </div>
    <div class="row mb-3">
        <label for="x3" class="col-sm-3 col-form-label">Hóa</label>
        <div class="col-sm-9"><input type="number" name="hoa" min="0"  class="form-control" id="x3" value="{{$h}}"></div>
        </div>
    <div class="row mb-3">
        <label for="x4" class="col-sm-3 col-form-label">Điểm chuẩn</label>
        <div class="col-sm-9"><input type="number" name="diemchuan" min="0" value="{{$dc}}" class="form-control text-primary" id="x4" ></div>
    </div>
    <div class="row mb-3">
        <label for="x5" class="col-sm-3 col-form-label">Tổng điểm</label>
        <div class="col-sm-9"><input type="number" name="tongdiem" id="x5" class="form-control text-danger"value="{{$td}}" disabled></div> 
    </div>
    <div class="row mb-3">
        <label for="x6" class="col-sm-3 col-form-label">Xét</label>
        <div class="col-sm-9"><input type="text" name="xet" value="{{$x}}" class="form-control text-success" id="x6" disabled></div> 
    </div>
    <button type="submit" class="btn btn-info">Xem kết quả</button>
</form>
@endsection