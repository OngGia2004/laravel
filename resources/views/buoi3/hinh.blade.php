<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hinh</title>
</head>
<body>
    <table width="500px"height="300px" cellspacing="0" cellpadding="5px" border="0" >
        <tr>
            <td>STT</td>
            <td>Hình</td>
            <td>Số đo</td>
            <td>Thao tác</td>
        </tr>
        <tr>
            <td>1</td>
            <td>HCN</td>
            <Td>Chiều dài = 8; Chiều rông= 5</Td>
            <td><a href="{{route('tinh',[8,5])}}">Tính</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Hình Vuông</td>
            <td>Chiều dài = 5</td>
            <td><a href="{{route('tinh',[6])}}">Tính</a></td>
        </tr>
    </table>
    <div>
        @if($kq !="")
         {{$kq}}
         @endif
    </div>
</body>
</html>