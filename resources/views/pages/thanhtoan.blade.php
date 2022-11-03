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

			<div class="shopper-informations">
				<div class="row" style="width: 100%;margin-left: 0px;">
                    <div class="bill-to">
                        <p>Điền thông tin vận chuyển</p>
                        <div class="form-one" style="width: 100%;">
                            <form action="{{URL::to('/luuthanhtoan')}}" method="post">
                                {{csrf_field()}}
                                <input type="text" name="vanchuyen_email" placeholder="Email">
                                <input type="text" name="tenvanchuyen" placeholder="Họ và tên">
                                <input type="text" name="vanchuyen_diachi" placeholder="Đia chỉ">
                                <input type="text" name="vanchuyen_dienthoai" placeholder="Số điện thoại">
                                <textarea name="vanchuyen_ghichu" placeholder="Ghi chú" row="16" style="padding-left: 12px;height: 100px;"></textarea>
                                <input type="submit" value="Send" name="send_order" class="btn btn-primary btn-sm">
                            </form>
                        </div>
                    </div>				
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
@endsection