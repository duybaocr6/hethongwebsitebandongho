@extends('layout')
@section('content')
<div class="features_items"><!--Lovely Flover-features_items-->
	<h2 class="title text-center">ĐỒNG HỒ ĐƯỢC YÊU THÍCH NHẤT</h2>
	@foreach($sanpham as $key => $product)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
					<div class="productinfo text-center">
						<form>
							@csrf
							<input type="hidden" id="wishlish_productname{{$product -> sanpham_id}}" value="{{$product -> sanpham_id}}" class="cart_sanpham_id_{{$product -> sanpham_id}}">
							<input type="hidden" value="{{$product -> sanpham_image}}" class="cart_sanpham_image_{{$product -> sanpham_id}}">
							<input type="hidden" id="wishlish_productprice{{$product -> sanpham_id}}" value="{{number_format($product -> sanpham_giaban).' '.'VNĐ'}}" class="cart_sanpham_price_{{$product -> sanpham_id}}">
							<input type="hidden" value="1" class="cart_sanpham_qty_{{$product -> sanpham_id}}">
							<a id="wishlish_producturl{{$product -> sanpham_id}}" href="{{URL::to('/ctsanpham/'.$product -> sanpham_id)}}">
								<img id="wishlish_productimage{{$product -> sanpham_id}}" src="{{URL::to($product -> sanpham_image)}}" style="max-width:255px; max-height: 290px;" alt="" />
								<h2>{{number_format($product -> sanpham_giaban).' '.'VNĐ'}}</h2>
								<p style="font-weight: bolder">{{($product -> sanpham_id)}}</p>
							</a>
							<!-- <button type="button" class="btn btn-default add-to-cart" name="add-to-cart" data-id_product='{{$product -> sanpham_id}}'>Thêm vào giỏ hàng</button> -->
						</form>
					</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<style type="text/css">
						ul.nav.nav-pills.nav-justified li{
							text-align: centten;
							font-size:13px;
						}
						.button_wishlist{
							border:none;
							background: #ffff;
							color:#B3AFA8;
						}
						ul.nav.nav-pills.nav-justified i{
							color:#B3AFA8;
						}
						.button_wishlist span:hover{
							color:#FE980F;
						}
						.button_wishlist:focus{
							border:none;
							outline:none;
						}
					</style>
					<li style="padding-left: 80px;">
						<i class="fa fa-plus-square"></i>
						<button class="button_wishlist" id="{{$product -> sanpham_id}}" onclick="add_wistlist(this.id);">
						<span>Thêm yêu thích</span>
						</button>
					</li>
				</ul>
			</div>
		</div>
	</div>
	@endforeach
</div><!--features_items-->

@endsection