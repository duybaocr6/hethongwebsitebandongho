@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/trangchu')}}">Trang chủ</a></li>
				  <li class="active">Giỏ Hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình Ảnh Sản Phẩm</td>
							<td class="description">Mô tả</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_content->options->image)}}" width="150px" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
							</td>
							<td class="cart_price">
								<p></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/sua')}}" method="post">
									
										<input class="cart_quantity_input" type="text" name="quantitycart" value="">
										<input type="hidden" value="" name="rowIdcart" class="form-control">
										<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								
									
									
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				
			</div>
			<div class="row">
				<div class="col-sm-6" style="width: 100%;">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::total(0).' VNĐ'}}</span></li>
							<!-- <li>Eco Tax <span>{{Cart::tax(0).' VNĐ'}}</span></li> -->
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total(0).' VNĐ'}}</span></li>
						</ul>
							<!-- <a class="btn btn-default update" href="">Update</a> -->
							<?php
									$khachhang_id = Session::get('khachhang_id');
									if ($khachhang_id!=null){
								?>
								<a class="btn btn-default check_out" href="{{URL::to('/thanhtoan')}}">Thanh Toán</a>
								<?php
								}else{
								?>
									<a class="btn btn-default check_out" href="{{URL::to('/dangnhap-thanhtoan')}}">Thanh Toán</a>
								<?php  
								}
								?>
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection