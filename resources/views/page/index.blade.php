@extends('page.master')
@section('css')
<link rel="stylesheet" href="source/assets/dest/css/add.css">
@endsection
@section('content')
<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									@foreach($slide as  $sl)
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>
						        	</li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	<div class="hr"></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>SẢN PHẨM MỚI</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if($new->promotion_price == 0)
										<div class="ribbon-wrapper"><div class="ribbon new">New</div></div>
										@endif
										<div class="single-item-header">
											<a href="product/{{$new->id}}"><img src="source/image/image/{{$new->image}}"  alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												@if($new->promotion_price == 0)
													<span class="flash-sale">{{number_format($new->unit_price)}}đ</span>
												@else
													<span class="flash-del">{{number_format($new->unit_price)}}đ</span>
													<span class="flash-sale">{{number_format($new->promotion_price)}}đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="addcart/{{$new->id}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="hr"></div>
									</div>
								</div>
							@endforeach

							
						</div> <!-- .beta-products-list -->
						<div class="row">{{$new_product->appends(['newp' => $new_product->currentPage()])->links()}}</div>

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>SẢN PHẨM KHUYẾN MẠI</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy  {{count($pro_product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($pro_product as $pro)
								<div class="col-sm-3">
									<div class="single-item">
									@if($pro->promotion_price != 0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<div class="single-item-header">
											<a href="product/{{$pro->id}}"><img src="source/image/image/{{$pro->image}}" class="products" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pro->name}}</p>
											<p class="single-item-price">
												@if($pro->promotion_price == 0)
													<span class="flash-sale">{{number_format($pro->unit_price)}}đ</span>
												@else
													<span class="flash-del">{{number_format($pro->unit_price)}}đ</span>
													<span class="flash-sale">{{number_format($pro->promotion_price)}}đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left ml-3"id="cart-to" href="addcart/{{$pro->id}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product/{{$pro->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="hr"></div>
								</div>
							@endforeach
							</div>
						<div class="row">{{$pro_product->appends(['prop' => $pro_product->currentPage()])->links()}}</div>
							<div class="space40">&nbsp;</div>
					
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection