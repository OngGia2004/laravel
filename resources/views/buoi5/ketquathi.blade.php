@extends("buoi5.layout");
@section('content')
@if (! isset($dtb))
    {{$dhk1=""}}
    {{$dhk2=""}}
    {{$dtb=""}}
    {{$kq=""}}
    {{$xl=""}}
@endif
<h1 align="center">Kết quả học tập</h1>
<form action="{{route('ketquathi')}}" method="post">
    {{csrf_field()}}
    <div class="row mb-3">
        <label for="t1"  class="col-sm-3 col-form-label">Điêm học kì 1</label>
        <div class="col-sm-9"><input type="number"class="form-control"  name="diemhk1" value="{{$dhk1}}" id="t1"  min="0"></div>
    </div>
    <div class="row mb-3">
        <label for="t2"  class="col-sm-3 col-form-label">Điêm học kì 2</label>
        <div class="col-sm-9"><input type="number"class="form-control"  name="diemhk2"value="{{$dhk2}}" id="t2"  min="0"></div>
    </div>
    <div class="row mb-3">
        <label for="t3"  class="col-sm-3 col-form-label">Điêm trung bình</label>
        <div class="col-sm-9"><input type="number"class="form-control"  name="diemtb" value="{{$dtb}}" id="t3" disabled></div>
    </div>
    <div class="row mb-3">
        <label for="t4"  class="col-sm-3 col-form-label">Kết quả</label>
        <div class="col-sm-9"><input type="text"class="form-control text-danger"  name="ketqua" value="{{$kq}}" id="t4" disabled ></div>
    </div>
    <div class="row mb-3">
        <label for="t5"  class="col-sm-3 col-form-label">Xếp loại học lực</label>
        <div class="col-sm-9"><input type="text"class="form-control text-danger"  name="xeploai" value="{{$xl}}" id="t5" disabled ></div>
    </div>
    <button type="submit" class="btn btn-primary  text-align"> Kết quả</button>

@endsection