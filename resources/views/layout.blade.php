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
								<li><a href="{{URL::to('/danhsachsanpham')}}"><i class="fa fa-star"></i> Danh s??ch s???n ph???m </a></li>
								<?php
									$khachhang_id = Session::get('khachhang_id');
									$vanchuyen_id = Session::get('vanchuyen_id');
									if ($khachhang_id!=null&&$vanchuyen_id==null){
								?>
								<li><a href="{{URL::to('/thanhtoan')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
								<?php 
								}else if($khachhang_id!=null&&$vanchuyen_id!=null){
								?>
								<li><a href="{{URL::to('/tongtien')}}"><i class="fa fa-lock"></i> Thanh to??n</a></li>
								<?php  
								}else{
								?>
								<li><a href="{{URL::to('/dangnhap-thanhtoan')}}"><i class="fa fa-lock"></i> Thanh to??n</a></li>
								<?php 
								}
								?>
								<li><a href="{{URL::to('/xemgiohang')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<?php
									$khachhang_id = Session::get('khachhang_id');
									if ($khachhang_id!=null){
								?>
								<li><a href="{{URL::to('/dangxuat-thanhtoan')}}"><i class="fa fa-lock"></i> ????ng xu???t</a></li>
								<?php 
								}else{
								?>
								<li><a href="{{URL::to('/dangnhap-thanhtoan')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
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
                                <li><a href="{{URL::to('/trangchu')}}" class="active">Trang ch???</a></li>
                                <li class="dropdown"><a href="#">?????ng h??? ch??nh h??ng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="{{URL::to('/danhsachsanpham')}}">Danh s??ch s???n ph???m</a></li> 
										<li><a href="{{URL::to('/blog')}}">Blog</a></li> 
                                    </ul>
                                </li>
                                <li><a href="{{URL::to('/xemgiohang')}}">Gi??? h??ng</a></li>
                                <li><a href="{{URL::to('/lienhe')}}">Li??n h???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 input-group input-group-lg">
						<form action="{{URL::to('/timkiem')}}" method="post">
                            {{csrf_field()}}
							<input type="text" name="keyword_submit" placeholder="T??m ki???m" style="float: left;width: 80%;height: 35px;font-size: 18px;padding-left: 5px;border-radius: 4px;" />
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
                                    <h1><span>?????NG H???</span>-?????C QUY???N</h1>
                                    <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>Th????ng hi???u ?????ng h??? ??a d???ng v??? ki???u d??ng, n??ng ?????ng v??? m???u m?? v???i thi???t k??? tr???i d??i t??? sang tr???ng, n??? t??nh cho ?????n thanh l???ch, nh??? nh??ng</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g1.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>?????NG H???</span>-CAO C???P</h1>
                                    <h2>100% ?????ng h??? ch??nh h??ng do ch??ng t??i nh???p kh???u t??? c??c n?????c!</h2>
                                    <p>Th??? Gi???i ?????ng H??? mong mu???n b???n s??? ch???n ???????c nh???ng chi???c ?????ng h??? ??ng ??, ph?? h???p v???i th???i trang c???a m??nh.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g2.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>?????NG H???</span>-C???P ????I</h1>
                                    <h2>?????ng h??? d??nh cho y??u th????ng, d??nh cho t??nh y??u!</h2>
                                    <p>?????ng h??? l?? th??? lu??n g??p m???t trong cu???c s???ng c???a ch??ng ta gi??p cu???c s???ng th??m t????i ?????p, t??nh y??u c???a ????i l???a th??m n???y n???, g???n k???t v?? th??ng hoa h??n. Nh???ng ?????ng h??? ?????p s??? mang ?????n cho b???n t??m tr???ng t????i m???i, vui v??? v?? ng???p tr??n h???nh ph??c.</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g3.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>?????NG H???</span>-PH??I M???NH</h1>
                                    <h2>?????ng h??? nam t??nh!</h2>
                                    <p>?????ng h??? s??? l?? v???t d???ng c???n thi???t ????? b???n c?? th??? tr??? n??n l???ch s???, t??? nh??? h??n, t???o ???n t?????ng v??? m???t m???u ????n ??ng tr?????ng th??nh, ????ng tin c???y v?? bi???t qu?? tr???ng th???i gian. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/g4.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
                                    <h1><span>?????NG H???</span>-PH??I N???</h1>
                                    <h2>?????ng h??? n??? t??nh!</h2>
                                    <p>T??? l??u ?????ng h??? ???? l?? m???t ph??? ki???n kh??ng th??? thi???u ?????i v???i ph??i ?????p. Ngo??i vi???c gi??p qu???n l?? th???i gian, n?? c??n nh?? m??n trang s???c ??i k??m gi??p t??n l??n n??t ?????p c???a trang ph???c, th??? hi???n c?? t??nh v?? ?????ng c???p c???a ch??? em.</p>
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
						<h2>DANH S??CH C??C LO???I ?????NG H???</h2>
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
							<h2>K??CH C??? D??Y ??EO</h2>
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
							<h2><span>?????NG H???</span>-xwacth</h2>
							<p>Ch??ng t??i s???n s??ng ph???c v??? qu?? kh??ch 24/7.<br> V???i c??c lo???i hoa t????i sang tr???ng v?? qu?? ph??i!</p>
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
								<p>K??? ni???m sinh nh???t</p>
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
								<p>Ng??y Valentine</p>
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
								<p>Ch??c m???ng</p>
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
								<p>Ng??y Ph??? n???</p>
								<h2>08 MARCH 2020</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('public/frontend/images/map.png')}}" alt="" />
							<p>152 Thanh ??a, P27, Q. B??nh Th???nh, th??nh ph??? H??? Ch?? Minh.</p>
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
							<h2>D???ch v??? h??? tr???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tr??? gi??p online</a></li>
								<li><a href="#">Li??n h???</a></li>
								<li><a href="#">T??nh tr???ng ????n h??ng</a></li>
								<li><a href="#">Thay ?????i n??i nh???n</a></li>
								<li><a href="#">C??c c??u h???i th?????ng g???p</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>T??m ki???m nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hoa H???ng</a></li>
								<li><a href="#">Hoa Lan</a></li>
								<li><a href="#">Hoa c???m t?? c???u</a></li>
								<li><a href="#">Hoa Ly</a></li>
								<li><a href="#">Hoa H?????ng D????ng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Ch??nh s??ch</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??i???u kho???n s??? d???ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
								<li><a href="#">Ch??nh s??ch ho??n l???i ti???n</a></li>
								<li><a href="#">H??? th???ng thanh to??n</a></li>
								<li><a href="#">Ch??nh s??ch khuy???n m??i</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Gi???i thi???u</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Th??ng tin c??ng ty</a></li>
								<li><a href="#">Tuy???n d???ng</a></li>
								<li><a href="#">V??? tr?? c???a h??ng</a></li>
								<li><a href="#">Ch????ng tr??nh khuy???n m??i</a></li>
								<li><a href="#">Quy???n l???i kh??ch h??ng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Li??n h??? ch??ng t??i</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="?????a ch??? email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>H??y nh???n c??c b???n c???p nh???t g???n ????y nh???t t??? trang web c???a ch??ng t??i 
								v?? h??y c???p nh???t th??ng tin c?? nh??n m???i nh???t c???a b???n...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2020. </p>Designed by <span>NTTU</span>
					<p class="pull-right">?????a ch??? c???a h??ng: <span><a target="_blank" href="#">152 Thanh ??a, P27, Q. B??nh Th???nh, HCM City</a></span></p>
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
				alert('S???n ph???m c???a b???n ???? y??u th??ch, n??n kh??ng th??? th??m');
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