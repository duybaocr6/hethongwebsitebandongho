@extends('layout')
@section('content')
<div class="features_items"><!--Lovely Flover-features_items-->
	<h2 class="title text-center">CHI TIẾT SẢN PHẨM</h2>
	@foreach($ctsanpham as $key => $value)
	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				<img src="{{URL::to($value->sanpham_image)}}" alt="" />
			</div>
		</div>
		<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
				<img src="{{asset('public/frontend/images/new.jpg')}}" class="newarrival" alt="" />
				<h2>{{($value->sanpham_id)}}</h2>
				<img src="{{asset('public/frontend/images/rating.png')}}" alt="" />
				<form method="POST" action="{{URL::to('/giohang')}}">
					{{csrf_field()}}
					<span>
						<span>{{number_format($value->sanpham_giaban).' '.'VNĐ'}}</span>
						<label>Số lượng:</label>
						<input name="qty" type="number" min="1" value="1" />
						<input name="productid_hidden" type="hidden"  value="{{($value->sanpham_id)}}" />
						<button type="submit" class="btn btn-fefault cart" style="margin-left: 192px">
							<i class="fa fa-shopping-cart"></i>
							Thêm vào giỏ hàng
						</button>
					</span>
				</form>
				<p><b>Điều kiện:</b> New</p>
				<p><b>Thương hiệu:</b> {{($value->thuonghieu_name)}}</p>
				<a href=""><img src="{{asset('public/frontend/images/socials.png')}}" class="share img-responsive"  alt="" /></a>
			</div><!--/product-information-->
		</div>
	</div><!--/product-details-->

	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li><a href="#details" data-toggle="tab">CHI TIẾT</a></li>
				<li><a href="#companyprofile" data-toggle="tab">HƯỚNG DẪN SỬ DỤNG</a></li>
				<li class="active"><a href="#reviews" data-toggle="tab">ĐÁNH GIÁ</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade" id="details" >
				<p style="font-size: 18px">{{($value->sanpham_mota)}}</p>
			</div>
			
			<div class="tab-pane fade" id="companyprofile" >
				<p>HƯỚNG DẪN VỆ SINH ĐỒNG HỒ DÂY DA</p>

				<p>- Dùng vải ẩm lau sạch sẽ và để khô hoặc dùng xà phòng, dầu oliu làm sạch.</p>
				<p>- Để dây da cùng gói hút ẩm trong hộp kín để khử mùi hôi.</p>

				<p>* Chú ý: </p>
				<p>- Không nên xả nước trực tiếp vào dây da đồng hồ vì sẽ làm dây da thấm nước và kém bền.</p>
				<p>- Khi dây da bị ẩm, không nên dùng máy sấy vì dây đồng hồ có thể bị cong vênh, cứng lại.</p>

				<p>HƯỚNG DẪN VỆ SINH ĐỒNG HỒ DÂY KIM LOẠI</p>

				<p>(*) Đối với đồng hồ có khả năng chống nước tốt:</p>

				<p>- Chuẩn bị nước ấm, nhiệt độ tầm 50 độ C, pha với một chút nước rửa bát. </p>
				<p>- Nhúng toàn bộ đồng hồ vào dung dịch này, ngâm trong vòng 3 - 5 phút.</p>
				<p>- Sử dụng bàn chải lông mềm cọ rửa các kẽ hở trên dây đồng hồ rồi rửa lại bằng nước sạch. </p>

				<p>(*) Đối với đồng hồ có khả năng chống nước kém:</p>

				<p>- Lấy một chiếc tăm nhỏ để lấy đi các vết bẩn trong các khe hở. </p>
				<p>- Xoa đều kem đánh răng lên dây đồng hồ, sử dụng bàn chải mềm làm sạch rồi rửa lại với nước sạch.</p>

				<p>HƯỚNG DẪN VỆ SINH ĐỒNG HỒ DÂY NATO/DÂY VẢI</p>

				<p>(*) Khi dây vải bị dính dầu mỡ:</p>

				<p>- Xịt ướt dây đồng hồ với oxi già.</p>
				<p>- Rắc đều bột nở lên dây đồng hồ, dùng bàn chải lông mềm cọ sạch.</p>
				<p>- Sau 30 phút xả qua nước và phơi khô.</p>

				<p>(*) Khi dây vải bị dính mực bút bi:</p>

				<p>- Bôi kem đánh răng và xà phòng vào vết mực dính trên dây đồng hồ.</p>
				<p>- Dùng bàn chải lông mềm cọ sạch.</p>
				<p>- Thoa thêm một ít cồn lên vết bẩn rồi vò lại với nước sạch."</p>
			</div>
			
			<div class="tab-pane fade active in" id="reviews" >
				<div class="col-sm-12">
					<p>Đến với Xwatch, tôi cam đoan bằng cả lương tâm mình: tất cả các mẫu đồng hồ đều được kiểm định nghiêm ngặt, hệ thống máy móc chuẩn Thụy Sĩ, đội ngũ chuyên viên tay nghề cao với hơn 40 NĂM KINH NGHIỆM đủ khả năng sửa chữa lắp ráp với cả những chiếc đồng hồ tinh xảo nhất từ Omega, Rolex tới Patek Philippe…</p>
					<p><b>Bình luận</b></p>
					
					<form action="#">
						<span>
							<input type="text" placeholder="Họ và tên"/>
							<input type="email" placeholder="Email "/>
						</span>
						<textarea name="" ></textarea>
						<b>Đánh giá: </b> <img src="{{asset('public/frontend/images/product-details/rating.png')}}" alt="" />
						<button type="button" class="btn btn-default pull-right">
							Submit
						</button>
					</form>
				</div>
			</div>
			
		</div>
	</div><!--/category-tab-->
					
	<div class="recommended_items"><!--recommended_items-->
		<h2 class="title text-center">CÁC SẢM PHẨM LIÊN QUAN</h2>
		
		<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
				@foreach($sanphamlq as $key =>$lienquan )	
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{URL::to(''.$lienquan -> sanpham_image)}}" alt="" />
									<h2>{{number_format($lienquan->sanpham_giaban).' '.'VNĐ'}}</h2>
									<p>{{($lienquan->sanpham_id)}}</p>
									<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
				<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
				</a>
				<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
				</a>			
		</div>
	</div><!--/recommended_items-->
	@endforeach
</div>
@endsection
	