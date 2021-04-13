<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiền điện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('tiendien')}}">Tiền điện</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ketquathi')}}">Kết quả học tập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('thidaihoc')}}">Kết quả thi đại học</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('canhhuyen')}}">Cạnh huyền tam giác vuông</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giai phương trình bậc nhất</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('taifile')}}">taifile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
    <div class="alert alert-info text-center fs-1" role="alert">Trang chủ</div>
    <div style="margin:0px auto;width:50%">
        @yield("content")
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>