<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
@if(!isset($kq))
    {{$kq = ""}}
    {{$ht = ""}}
    {{$lt = ""}}
    {{$th = ""}}
@endif

<form action="{{route('ketqua')}}" method="post">
    {{csrf_field()}}
<table width="400px" height ="200px" cellspacing = "0" cellpadding="5px" border="1">
         <h1>Xếp loại Học Tập</h1>
    <tr>
        <td>Họ Tên</td>
        <td><input type="text" name="hoten" id="ht"></td>
    </tr>
    <tr>
        <td>Điểm LT</td>
        <td><input type="text" name="lythuyet" id="lt"></td>
    </tr>
    <tr>
        <td>Điểm TH</td>
        <td><input type="text" name="thuchanh" id="th"></td>
    </tr>
    <tr align="center">
        <td colspan="2"><input type="submit" value="XEM KẾT QUẢ"></td>
    </tr>
    
</table>   
</form>
<div>{{$kq}}</div>
</body>
</html>