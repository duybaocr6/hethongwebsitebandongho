<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Flower Shop Online</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{('public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{('public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<body>
	<header id="header"><!--header-->
		<div class="header_top" style="background: #D6D6D0;"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								 <li><a href="#"><i class="fa fa-phone"></i> + 028 38 097986</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@donghoxwatch.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trangchu')}}"><img style="background-color: #D6D6D0" src="{{asset('public/frontend/images/logo.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{URL::to('/danhsachsanpham')}}"><i class="fa fa-star"></i> Danh sách sản phẩm </a></li>
								<?php
									$khachhang_id = Session::get('khachhang_id');
									$vanchuyen_id = Session::get('vanchuyen_id');
									if ($khachhang_id!=null&&$vanchuyen_id==null){
								?>
								<li><a href="{{URL::to('/thanhtoan')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<?php 
								}else if($khachhang_id!=null&&$vanchuyen_id!=null){
								?>
								<li><a href="{{URL::to('/tongtien')}}"><i class="fa fa-lock"></i> Thanh toán</a></li>
								<?php  
								}else{
								?>
								<li><a href="{{URL::to('/dangnhap-thanhtoan')}}"><i class="fa fa-lock"></i> Thanh toán</a></li>
								<?php 
								}
								?>
								<li><a href="{{URL::to('/xemgiohang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<?php
									$khachhang_id = Session::get('khachhang_id');
									if ($khachhang_id!=null){
								?>
								<li><a href="{{URL::to('/dangxuat-thanhtoan')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
								<?php 
								}else{
								?>
								<li><a href="{{URL::to('/dangnhap-thanhtoan')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<?php  
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trangchu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Đồng hồ chính hãng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="{{URL::to('/danhsachsanpham')}}">Danh sách sản phẩm</a></li> 
										<li><a href="{{URL::to('/blog')}}">Blog</a></li> 
                                    </ul>
                                </li>
                                <li><a href="{{URL::to('/xemgiohang')}}">Giỏ hàng</a></li>
                                <li><a href="{{URL::to('/lienhe')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 input-group input-group-lg">
						<form action="{{URL::to('/timkiem')}}" method="post">
                            {{csrf_field()}}
							<input type="text" name="keyword_submit" placeholder="Tìm kiếm" style="float: left;width: 80%;height: 35px;font-size: 18px;padding-left: 5px;border-radius: 4px;" />
							<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</form>
                    </div>  
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">								
								<div class="col-sm-6">
                                    <h1><span>ĐỒNG HỒ</span>-ĐỘC QUYỀN</h1>
                                    <h2>Miễn phí giao hàng trên địa bàn Thành phố Hồ Chí Minh.</h2>
                                    <p>Thương hiệu đồng hồ đa dạng về kiểu dáng, năng động về mẫu mã với thiết kế trải dài từ sang trọng, nữ tính cho đến thanh lịch, nhẹ nhàng</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g1.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>ĐỒNG HỒ</span>-CAO CẤP</h1>
                                    <h2>100% Đồng hồ chính hãng do chúng tôi nhập khẩu từ các nước!</h2>
                                    <p>Thế Giới Đồng Hồ mong muốn bạn sẽ chọn được những chiếc đồng hồ ưng ý, phù hợp với thời trang của mình.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g2.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>ĐỒNG HỒ</span>-CẶP ĐÔI</h1>
                                    <h2>Đồng hồ dành cho yêu thương, dành cho tình yêu!</h2>
                                    <p>Đồng hồ là thứ luôn góp mặt trong cuộc sống của chúng ta giúp cuộc sống thêm tươi đẹp, tình yêu của đôi lứa thêm nảy nở, gắn kết và thăng hoa hơn. Những đồng hồ đẹp sẽ mang đến cho bạn tâm trạng tươi mới, vui vẻ và ngập tràn hạnh phúc.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g3.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>ĐỒNG HỒ</span>-PHÁI MẠNH</h1>
                                    <h2>Đồng hồ nam tính!</h2>
                                    <p>Đồng hồ sẽ là vật dụng cần thiết để bạn có thể trở nên lịch sự, tế nhị hơn, tạo ấn tượng về một mẫu đàn ông trưởng thành, đáng tin cậy và biết quý trọng thời gian. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g4.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>ĐỒNG HỒ</span>-PHÁI NỮ</h1>
                                    <h2>Đồng hồ nữ tính!</h2>
                                    <p>Từ lâu đồng hồ đã là một phụ kiện không thể thiếu đối với phái đẹp. Ngoài việc giúp quản lý thời gian, nó còn như món trang sức đi kèm giúp tôn lên nét đẹp của trang phục, thể hiện cá tính và đẳng cấp của chị em.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g5.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
		<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>DANH SÁCH CÁC LOẠI ĐỒNG HỒ</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($thuonghieu as $key => $value)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danhmucsanpham/'.$value->thuonghieu_id)}}">{{$value->thuonghieu_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>KÍCH CỠ DÂY ĐEO</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($sanpham as $key => $product)
										<li><a href="{{URL::to('/kichcodaydeo/'.$product->sanpham_kichco)}}"> <span class="pull-right"></span>{{$product->sanpham_kichco}}</a></li>
									@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset('public/frontend/images/weekday1.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="companyinfo">
							<h2><span>ĐỒNG HỒ</span>-xwacth</h2>
							<p>Chúng tôi sẳn sàng phục vụ quý khách 24/7.<br> Với các loại hoa tươi sang trọng và quý phái!</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/m6.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Kỷ niệm sinh nhật</p>
								<h2>16 DEC 2020</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/m3.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Ngày Valentine</p>
								<h2>14 FEB 2020</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/m5.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Chúc mừng</p>
								<h2>22 AUG 2020</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/m2.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Ngày Phụ nữ</p>
								<h2>08 MARCH 2020</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('public/frontend/images/map.png')}}" alt="" />
							<p>152 Thanh Đa, P27, Q. Bình Thạnh, thành phố Hồ Chí Minh.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ hỗ trợ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trợ giúp online</a></li>
								<li><a href="#">Liên hệ</a></li>
								<li><a href="#">Tình trạng đơn hàng</a></li>
								<li><a href="#">Thay đổi nơi nhận</a></li>
								<li><a href="#">Các câu hỏi thường gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tìm kiếm nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hoa Hồng</a></li>
								<li><a href="#">Hoa Lan</a></li>
								<li><a href="#">Hoa cẩm tú cầu</a></li>
								<li><a href="#">Hoa Ly</a></li>
								<li><a href="#">Hoa Hướng Dương</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Chính sách hoàn lại tiền</a></li>
								<li><a href="#">Hệ thống thanh toán</a></li>
								<li><a href="#">Chính sách khuyến mãi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới thiệu</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Tuyển dụng</a></li>
								<li><a href="#">Vị trí cửa hàng</a></li>
								<li><a href="#">Chương trình khuyến mãi</a></li>
								<li><a href="#">Quyền lợi khách hàng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Liên hệ chúng tôi</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Địa chỉ email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Hãy nhận các bản cập nhật gần đây nhất từ trang web của chúng tôi 
								và hãy cập nhật thông tin cá nhân mới nhất của bạn...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020. </p>Designed by <span>NTTU</span>
					<p class="pull-right">Địa chỉ cửa hàng: <span><a target="_blank" href="#">152 Thanh Đa, P27, Q. Bình Thạnh, HCM City</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script type="text/javascript">
		function view(){
			if(localStorage.getItem('data')!=null){
				var data = JSON.parse(localStorage.getItem('data'));
				// data.reverse();
				// document.getElementById('row_wishlist').style.overflow='scroll';
				// document.getElementById('row_wishlist').style.height='600px';
				for(i=0;i<data.length;i++)
				{
					var name = data[i].name;
					var price = data[i].price;
					var image = data[i].image;
					var url = data[i].url;
					$("#row_wishlist").append('<div class="row" style="margin-bottom: 50px;"><div class="col-md-4"><img width="100%" src="'+image+'"></div><div class="col-md-8" style="padding-top: 60px;"><p>'+name+'</p><p style="color:#FE980F">'+price+'</p></div>');
					
				}
			}
		}
		view();
		function add_wistlist(clicked_id){
			var id = clicked_id;
			var name = document.getElementById('wishlish_productname'+id).value;
			var price = document.getElementById('wishlish_productprice'+id).value;
			var image = document.getElementById('wishlish_productimage'+id).src;
			var url = document.getElementById('wishlish_producturl'+id).href;
		
			var newItem={
				'url':url,
				'id':id,
				'name':name,
				'price':price,
				'image':image
			}

			if(localStorage.getItem('data')==null){
			   localStorage.setItem('data', '[]');
			}
			var old_data = JSON.parse(localStorage.getItem('data'));
			var matches = $.grep(old_data,function(obj){
				return obj.id==id;
			})
			if(matches.length){
				alert('Sản phẩm của bạn đã yêu thích, nên không thể thêm');
			}else
			{
				old_data.push(newItem);
				$("#row_wishlist").append('<div class="row"><div class="col-md-4"><img width="100%" src="'+newItem.image+'"></div><div class="col-md-8"><p>'+newItem.name+'</p><p style="color:#FE980F">'+newItem.price+'</p></div>');
					
			}
			localStorage.setItem('data',JSON.stringify(old_data));
		}
	</script>

</body>
</html>