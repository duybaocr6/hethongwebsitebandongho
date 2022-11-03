@extends('layout2')
@section('content2')
	<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Liên <strong>Hệ</strong></h2>    			    				    				
					
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Tương tác hệ thống</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="{{URL::to('/')}}" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
							{{csrf_field()}}
				            <div class="form-group col-md-6">
				                <input type="text" name="danhgia_hovaten" class="form-control" required="required" placeholder="Họ và tên">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="danhgia_email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="danhgia_tieude" class="form-control" required="required" placeholder="Tiêu đề">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="danhgia_noidung" id="message" required="required" class="form-control" rows="8" placeholder="Nội Dung"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>XWACTH Inc.</p>
							<p>152 Thanh Đa, P27, Q. Bình Thạnh, thành phố Hồ Chí Minh</p>
							<p>VietNam</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@xwatch.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
@endsection