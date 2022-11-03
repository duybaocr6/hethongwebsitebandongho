@extends('layout')
@section('content')
<div class="features_items"><!--Lovely Flover-features_items-->
	<h2 class="title text-center">KẾT QUẢ TÌM KIẾM</h2>
	@foreach($timkiem as $key => $product)
	<a href="{{URL::to('/ctsanpham/'.$product -> sanpham_id)}}">
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{URL::to($product -> sanpham_image)}}" style="max-width:255px; max-height: 290px;" alt="" />
						<h2>{{number_format($product -> sanpham_giaban).' '.'VNĐ'}}</h2>
						<p style="font-weight: bolder;font-size: 18px;">{{($product -> sanpham_id)}}</p>
					</div>
			</div>
		</div>
	</div>
	</a>
	@endforeach
</div><!--features_items-->
@endsection