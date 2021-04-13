@extends("buoi5.layout");
@section('content')
    <h1>Tải lên máy chủ tập tin hình ảnh</h1>
    <h2>
        @if(isset($kq))
            {{$kq}}
        @endif
    </h2>
    <form action="{{route('taifile')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <div>
        <input type="file" name="taptin"/>
        <input type="submit" name="up" value="upload">
    </div>
    </form>
        @if (isset($kq) && ($ex == "jpg" || $ex =="gif"))
            <img src="{{asset('img/'.$tentaptin)}}" alt="{{$tentaptin}}" class="rounded mx-auto d-block" width="200px"/>
        @endif
    </div>
@endsection