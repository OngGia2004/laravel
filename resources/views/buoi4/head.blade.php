@extends('buoi4.trangchu')

@section('head')
 <div class="container-fluid">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('img/buoi4/gaixinh1.jpg')}}" class="d-block w-100" alt="gaixinh">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/buoi4/khoe.jpg')}}" class="d-block w-100" >
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/buoi4/hoctro.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </div>
        </div>
@endsection

@section('right')
        <div class="col-md-3 col-ms-6">
        <div class="list-group mt-3">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            Menu
        </a>
        <a href="#" class="list-group-item list-group-item-action">Khoa Học</a>
        <a href="#" class="list-group-item list-group-item-action">Công nghệ</a>
        <a href="#" class="list-group-item list-group-item-action">Máy Tính</a>
        <a href="#" class="list-group-item list-group-item-action">Cuộc Sống</a>
        <a href="#" class="list-group-item list-group-item-action">Truyên Cười</a>
        </div>
        </div>
    
@endsection

@section('left')
        <div class="col-md-9 col-ms-6">
            <div class=" mt-3">
                <img src ="{{asset('img/buoi4/nang-lo-lem.jpg')}}" width = "100%" />
            </div>
            <div class="content">
                <p>Review:<br>

Mình vừa đọc xong bộ này với cảm xúc đan xen lẫn lộn. Vừa vui mừng vì cuối cùng bộ truyện mình theo đuổi cũng đã đi đến cái kết ngọt ngào nhưng vừa hụt hẫng vì từ nãy sẽ không còn ngóng chờ ngày sách cập nhật nữa.

Nói về truyện này thì kì thực motif truyện này không mới, nhưng được cái tác giả hoán đổi vị trí nhân vật – để cho nam chính mang dáng vẻ béo ịch xấu xí. Nam chính trong truyện là soái ca nhưng không hề hoàn mỹ, thậm chí đã bộc lộ những tính cách khiến người ta chán ghét. Nhưng nữ chính và tình yêu của nữ chính đã thay đổi con người của nam chính. Mình nghĩ đây là một chi tiết rất hay giúp mối tình của họ vừa thực tế vừa lãng mạn hơn mà không hề nhàm chán.

Và 1 cái nữa là truyện này sủng ngược đan xen, không đến mức độ nặng nề giày xéo tâm can, chỉ vừa đủ khiến bạn sẽ cùng buồn thương với nhân vật chính. Cách xây dựng tình tiết rất đơn giản như thể tác giả đang thuật lại một câu chuyện tình yêu đời thường mà mỗi độc giả đều có thể dễ dàng đặt mình vào vị trí nhân vật. Chính giữa hàng ngàn cuốn ngôn tình đang “hồng hoá” cuộc sống như hiện nay, cuốn truyện này không nổi bật mà giản dị, dịu ngọt, thấm dần vào trái tim độc giả.</p>
            </div>
        </div>
@endsection


    