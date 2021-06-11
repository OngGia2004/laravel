 @extends('page.master') 
 @section('css')
 <link rel="stylesheet" href="source/assets/dest/css/product.css">
 @endsection
 @section('content')
  <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title title">Sản Phẩm {{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index">Trang Chủ</a> / <span>Thông Tin Chi Tiết Sản Phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
 
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/image/{{$sanpham->image}}" height="250px" width="250px" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$sanpham->name}}</p>
								<p class="single-item-price">
									@if($sanpham->promotion_price == 0)
 										<span class="flash-sale">{{number_format($sanpham->unit_price)}}đ</span>
									@else
 										<span class="flash-del">{{number_format($sanpham->unit_price)}}đ</span>
										 <span class="flash-sale">{{number_format($sanpham->promotion_price)}}đ</span>
 									@endif
										</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							
							<div class="space20">&nbsp;</div>

							<p>Đơn vị tính</p>
							<div class="single-item-options">
								<select class="wc-select" name="unit">
									<option>ĐVT</option>
									<option value="cái" {{$sanpham->unit == "cái" ? "selected ":""}}>CÁI</option>
									<option value="tập" {{$sanpham->unit == "tập" ? "selected ":""}}>TẬP</option>
									<option value="chai" {{$sanpham->unit == "chai" ? "selected ":""}}>CHAI</option>
									<option value="cây" {{$sanpham->unit == "cây" ? "selected ":""}}>CÂY</option>
									<option value="cục" {{$sanpham->unit == "cục" ? "selected ":""}}>CỤC</option>
								</select>
									<a class="add-to-cart" href="addcart/{{$sanpham->id}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
						</ul>
						<div class="panel" id="tab-description">
							<p>{{$sanpham->description}}</p>
						</div>
					</div>
					<div class="space30">&nbsp;</div>
					<div class="hr"></div>
					<div class="beta-products-list">
						<h4><bold>Sản Phẩm Tương Tự</bold></h4>
						<div class="row">
							@foreach ($sp_tuongtu as $sptt)
							<div class="col-sm-3">
								<div class="single-item">
									@if($sptt->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
 									@endif
									 @if($sptt->promotion_price==0)
										<div class="ribbon-wrapper"><div class="ribbon new">New</div></div>
 									@endif
									 <div class="single-item-header"style="margin:10px">
											<a href="product/{{$sptt->id}}"><img src="source/image/image/{{$sptt->image}}" alt=""></a>
									</div>

									<div class="single-item-body">
											<p class="single-item-title" >{{$sptt->name}}</p>
											<p class="single-item-price" >
												@if($sptt->promotion_price == 0)
													<span class="flash-sale">{{number_format($sptt->unit_price)}}đ</span>
												@else
													<span class="flash-del">{{number_format($sptt->unit_price)}}đ</span>
													<span class="flash-sale">{{number_format($sptt->promotion_price)}}đ</span>
												@endif
											</p>
										</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="addcart/{{$sptt->id}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product/{{$sptt->id}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
				 </div>
					<div class="col-sm-3 aside"> 
						<div class="widget">
							<h3 class="widget-title">SẢN PHẨM MỚI</h3>
							<div class="widget-body">
								<div class="beta-sales beta-lists">
									@foreach($new_product as $new)
										<div class="media-sales-item">
											<a class="pull-left" href="product/{{$new->id}}">
												<img src="source/image/image/{{$new->image}}" height="70" width="70"  alt=""></a>
											<div class="media-body">
												{{$new->name}}
												<span class="beta-sales-price">{{number_format($new->unit_price)}}đ</span>
											</div>
										</div>
									@endforeach
								</div>
								<div class="row">{{$new_product->links()}}</div>
							</div>
						</div> <!-- best sellers widget -->
						<!-- best sellers widget -->
					</div> 
				 </table>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
    @endsection