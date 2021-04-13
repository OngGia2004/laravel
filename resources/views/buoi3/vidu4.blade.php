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
    <div class="text-center fs-2">GIẢI PHƯƠNG TRÌNH BẬC 1
    </div>
    <table class="table table-success table-striped fs-3">
        <thead>
            <tr>
                <th>STT</th>
                <th>Phương trình</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>3x + 20 = 0</td>
                <td><a href="route{{('kq',[3,20])}}" class="btn btn-success">Gỉai</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3x + 0 = 0</td>
                <td><a href="route{{('kq',[0,0])}}" class="btn btn-success">Gỉai</td>
            </tr>
            <tr>
                <td>3</td>
                <td>0x + 8 = 0</td>
                <td><a href="route{{('kq',[0,8])}}" class="btn btn-success">Gỉai</td>
            </tr>
            <tr>
                <td>4</td>
                <td>3x - 9 = 0</td>
                <td><a href="route{{('kq',[2,-9])}}" class="btn btn-success">Gỉai</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center fs-2 bg-primary">
        @if($kq !="")
            {{$kq}}
        @endif
        </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>