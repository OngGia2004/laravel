
<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline address">
						<li ><a href="contact"><i class="fa fa-home "></i> 76/76  Đào Trí Quận 7,Hồ Chí Minh</a></li>
						<li><a href="contact"><i class="fa fa-phone"></i> 0963388490</a></li>
					</ul>
				</div>
				
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline  address">
						@if(Auth::check())
						<li><a href="dang-xuat"><i class="fa fa-user"></i>{{Auth::user()->name}}</a></li>
						<li><a href="dang-xuat">Đăng Xuất</a></li>
						@else
						<li><a href="signup">Đăng Kí</a></li>
						<li><a href="login">Đăng Nhập</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index" id="logo"><img src="source/add/logo.jpg" width="200px" alt=""class="image"></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="tim-kiem">
					        <input type="text" value=""  id="s"name="key" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>
					<div class="beta-comp">
						<div class="cart">
						<div class="beta-select"><i class="fa fa-shopping-cart"></i> GIỎ HÀNG 

						(@if(Session::has('cart')) {{Session('cart')->totalQty}}
						@else Trống @endif)

						<i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
							
								@if(Session::has('cart'))
									@foreach($product_cart as $pro)
									
								<div class="cart-item">
									<div class="pull-right">
										<a href="deletecart/{{$pro['item']['id']}}"><i class="fa fa-times"></i></a>
										<a href="xoahet/{{$pro['item']['id']}}">All</a>
										<a href="addcart/{{$pro['item']['id']}}"><i class="fa fa-plus"></i></a>
									</div>
									<div class="media">
										<a class="pull-left" href="#">
											<img src="source/image/image/{{$pro['item']['image']}}" alt="{{$pro['item']['image']}}">									
											</a>
											
										<div class="media-body">
											<span class="cart-item-title">&nbsp;{{$pro['item']['name']}}</span>
											<span class="cart-item-amount">&nbsp;

											{{$pro['qty']}} * 
												@if($pro['item']['promotion_price'] == 0)
												{{number_format($pro['item']['unit_price'])}}
												@else
												{{number_format($pro['item']['promotion_price'])}}
												@endif
											</span>
										</div>
									</div>
								</div> 
								@endforeach


								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: 
									<span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}}đ</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout" class="beta-btn primary text-center">Đặt Hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
								@endif
							</div>
						</div> <!-- .cart -->
					</div>
				
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
<nav class="navbar navbar-inverse navbar">
  <div class="container">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle nav" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand  active" href="index">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav " > 	
        <li class="dropdown  ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loại Sản Phẩm <span class="caret"></span></a>
          <ul class="dropdown-menu">
		  @foreach($type_pro as $type)
				<li class="navbar1"><a href="producttype/{{$type->id}}">{{$type->name}}</a></li>
		@endforeach
          </ul>
        </li>
        <li class=""><a href="about">Giới Thiệu</a></li>
		<li  class=""><a href="contact">Liên hệ</a></li>
      </ul>

    </div>
  </div>
</nav>
