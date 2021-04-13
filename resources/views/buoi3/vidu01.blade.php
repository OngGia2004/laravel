<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="text-center fs-2">Danh sách nhân viên</div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ Và Tên</th>
                <th>Năm Sinh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
    <tbody>
        <tr>
                <td>1</td>
                <td>Lý Mạc Sầu</td>
                <td>2000</td>
                <td><a href="#"class="btn btn-primary">Hiện câu chào</a></td>
        </tr>
        <tr>
                <td>2</td>
                <td>Tiểu Long Nữ</td>
                <td>2004</td>
                <td><a href="{{route('cauchao',[2004,'Phan Thành Binh'])}}"class="btn btn-primary">Hiện câu chào</a></td>
        </tr>
        <tr>
                <td>3</td>
                <td>Phan Thành Bình</td>
                <td>2001</td>
                <td><a href="{{route('cauchao',[2000,'Lý Mạc Sầu'])}}"class="btn btn-primary">Hiện câu chào</a></td>
        </tr>
        <tr>
                <td>4</td>
                <td>Doãn Chí Bình</td>
                <td>2005</td>
                <td><a href="{{route('cauchao',[2005,'Doãn chí Bình'])}}"class="btn btn-primary">Hiện câu chào</a></td>
        </tr>
    
    
    
    </tbody>
    </table>
    <div class="text-center fs-2 bg-warning">
        @if($cauchao != "")
        {{$cauchao}}
        @endif
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>