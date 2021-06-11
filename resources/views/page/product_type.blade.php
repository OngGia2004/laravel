@extends('page.master') 
@section('css')
<link rel="stylesheet" href="source/assets/dest/css/product_type.css">
@endsection
 @section('content')
  <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Loại {{$loai->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb ">
					<a href="index">Trang Chủ</a> / <span>{{$loai->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($danhsach_loai  as $dsl)
							<li><a href="producttype/{{$dsl->id}}">{{$dsl->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Danh sách sản phẩm thuộc  loại {{$loai->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_theloai)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theloai as $sptl)
								<div class="col-sm-4">
									<div class="single-item">
									@if($sptl->promotion_price != 0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									@if($sptl->promotion_price == 0)
										<div class="ribbon-wrapper"><div class="ribbon new">New</div></div>
									@endif
									<div class="single-item-header">
											<a href="product/{{$sptl->id}}"><img src="source/image/image/{{$sptl->image}}"height="250" width="250" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sptl->name}}</p>
											<p class="single-item-price" >
												@if($sptl->promotion_price == 0)
													<span class="flash-sale">{{number_format($sptl->unit_price)}}đ</span>
												@else
													<span class="flash-del">{{number_format($sptl->unit_price)}}đ</span>
													<span class="flash-sale">{{number_format($sptl->promotion_price)}}đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption" >
											<a class="add-to-cart pull-left" href="product/{{$sptl->id}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product/{{$sptl->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>						
								</div>
							@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
						<div class="hr"></div>

						<div class="beta-products-list">
							<h4>Sản Phẩm  Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left"style="color:red">Tìm thấy  {{count($sp_khac)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach ($sp_khac as $spk)
								<div class="col-sm-4">
									<div class="single-item">
									@if($spk->promotion_price != 0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									@if($spk->promotion_price == 0)
										<div class="ribbon-wrapper"><div class="ribbon new">New</div></div>
									@endif
									<div class="single-item-header">
											<a href="product/{{$spk->id}}"><img src="source/image/image/{{$spk->image}}"height="250" width="250" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title" >{{$spk->name}}</p>
											<p class="single-item-price" >
												@if($spk->promotion_price == 0)
													<span class="flash-sale">{{number_format($spk->unit_price)}}đ</span>
												@else
													<span class="flash-del">{{number_format($spk->unit_price)}}đ</span>
													<span class="flash-sale">{{number_format($spk->promotion_price)}}đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="product/{{$spk->id}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product/{{$spk->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>						
								</div>
								@endforeach					
							</div>
						</div>
							<div class="row">{{$sp_khac->links()}}</div>
							<div class="space40">&nbsp;</div>
							
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
    @endsection