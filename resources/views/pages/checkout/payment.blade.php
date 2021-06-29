@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">

			<div class="form-group text-center">
				<h2 style="color: #e09200; font-weight: bold;">Xem lại giỏ hàng</h2>
			</div>

			<div class="table-responsive cart_info mt-5 mb-2">
				<?php
				$content = Cart::content();
				
				?>
				<table class="table table-condensed">
					<thead> 
						<tr class="cart_menu btn-light">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sp</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td class="total">View</td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
										{{ csrf_field() }}
							<tr>
								<td class="cart_product">
									<a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="90" alt="" /></a>
								</td>
								<td class="cart_description">
									<h4><a href="" style="font-size: 14px;">{{$v_content->name}}</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>{{number_format($v_content->price).' '.'vnđ'}}</p>
								</td>
								<td class="one-eight">
									<div class="display-tc">
										<input class="form-control input-number" type="number" name="cart_quantity" value="{{$v_content->qty}}" style="width: 80px !important;" >							
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">									
										<?php
										$subtotal = $v_content->price * $v_content->qty;
										echo number_format($subtotal).' '.'vnđ';
										?>
									</p>
								</td>
								<td class="cart_view">									
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="UD" name="update_qty" class="btn btn-light" style="font-size: 12px;">
									<!-- <a href="" type="submit" value="UD" name="update_qty" style="color: #009e9e" class="fas fa-pencil-alt" ></a>	 -->
									<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times" style="color: #ff1f1f"></i></a>					
													
								</td>
								
							</tr>
						</form>
						@endforeach
					</tbody>
				</table>
			</div>

			<h5 style="color: #000061; font-weight: bold;">Chọn hình thức thanh toán</h5>
			<form method="POST" action="{{URL::to('/order-place')}}">
				{{ csrf_field() }}
				<div class="payment-options mt-3">
					<span>
						<input name="payment_option" value="1" type="checkbox">
						<label> Trả bằng thẻ ATM</label>
					</span>
					<span> <br>
						<input name="payment_option" value="2" type="checkbox"> 
						<label>Nhận tiền mặt</label>
					</span><br>
					<span>
						<input name="payment_option" value="3" type="checkbox">
						<label> Thanh toán thẻ ghi nợ</label>
					</span><br>
					<input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm mb-4">
				</div>
			</form>
		</div>
	</section> <!--/#cart_items-->

@endsection