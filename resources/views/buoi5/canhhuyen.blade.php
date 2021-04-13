@extends("buoi5.layout")
@section("content")
@if(! isset($ch))
    {{$ca= ""}}
    {{$cb= ""}}
    {{$ch = ""}}
@endif
    <h1 align="center">Tính cạnh huyền</h1>
<form action="{{route('canhhuyen')}}" method="post">
    {{csrf_field()}}
    <div class="row mb-3">
        <label for="txt1" class="col-sm-3 col-form-label">Cạnh A</label>
        <div class="col-sm-9"><input type="number" name="canha" class="form-control" id="txt1" value="{{$ca}}" ></div>    
    </div>
    <div class="row mb-3">
        <label for="txt12" class="col-sm-3 col-form-label">Cạnh B</label>
        <div class="col-sm-9"><input type="number" name="canhb" class="form-control" id="txt12" value="{{$cb}}"></div>    
    </div>
    <div class="row mb-3">
        <label for="txt12" class="col-sm-3 col-form-label">Cạnh huyền</label>
        <div class="col-sm-9"><input type="number" name="canhh" class="form-control" id="txt123" disabled value="{{$ch}}"></div>    
    </div>
    <button type="submit" class="btn btn-info">Tính</button>
@endsection