@extends('layout2')
@section('content2')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/trangchu')}}">Trang chủ</a></li>
				  <li class="active">Giỏ Hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				?>
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
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_content->options->image)}}" width="150px" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{($v_content->id)}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' VNĐ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/sua')}}" method="post">
										{{csrf_field()}}
										<input class="cart_quantity_input" type="text" name="quantitycart" value="{{($v_content->qty)}}">
										<input type="hidden" value="{{($v_content->rowId)}}" name="rowIdcart" class="form-control">
										<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' VNĐ';
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/xoa/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
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