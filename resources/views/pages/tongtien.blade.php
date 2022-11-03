@extends('layout2')
@section('content2')
    <section id="cart_items">
		<div class="container">
        <div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/trangchu')}}">Trang chủ</a></li>
				  <li class="active">Thanh Toán Giỏ Hàng</li>
				</ol>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
            <div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
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
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price).' VNĐ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update')}}" method="post">
										{{csrf_field()}}
										<input class="cart_quantity_input" type="text" name="quantitycart" value="{{($v_content->qty)}}"	>
										<input type="hidden" value="{{($v_content->rowId)}}" name="rowIdcart" class="form-control">
										<input type="submit" value="update" name="update_qty" class="btn btn-default btn-sm">
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
								<a class="cart_quantity_delete" href="{{URL::to('/delete/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
            <div class="payment-options">
            <form action="{{URL::to('/dathang')}}" method="post">
            {{csrf_field()}}
					<span>
						<label><input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ</label>
					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox"> Thẻ ghi nợ</label>
					</span>
                    <input type="submit" value="Checkout" name="send_order_place" class="btn btn-primary btn-sm">
                    </form>
				</div>
		</div>
	</section> <!--/#cart_items-->
@endsection