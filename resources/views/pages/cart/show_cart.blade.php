@extends('layout')
@section('content')

	<section id="cart_items">
	<?php
		$content = Cart::content();
	
	?>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-10 col-md-offset-1">
					<div class="process-wrap">
						<div class="process text-center active">
							<p><span>01</span></p>
							<h3>Giỏ hàng</h3>
						</div>
						<div class="process text-center">
							<p><span>02</span></p>
							<h3>Thanh toán</h3>
						</div>
						<div class="process text-center">
							<p><span>03</span></p>
							<h3>Hoàn tất thanh toán</h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="table-responsive cart_info mt-5 mb-2">
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
									<h5>{{$v_content->name}}</h5>
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
									<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times" style="color: #ff1f1f"></i></a>					
													
								</td>
								
							</tr>
						</form>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container mb-5">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="total-wrap mt-5">
						<div class="row">
							<div class="col-md-8">
							</div>
							<div class="col-md-4 col-md-push-1">
								<div class="total">
									<div class="sub">
										<p><span>Tổng:</span> <span>{{Cart::subtotal().' '.'vnđ'}}</span></p>
										<!-- <p><span>Thuế:</span> <span>{{Cart::tax().' '.'vnđ'}}</span></p> -->
										<p><span>Phí vận chuyển:</span> <span>Free</span></p>
									</div>
									<div class="grand-total">
										<p><span><strong>Tổng cộng:</strong></span><span>{{Cart::subtotal().' '.'vnđ'}}</span></p>
										
										<?php
											$customer_id = Session::get('customer_id');
											if($customer_id!=NULL){ 
										?>
											<a href="{{URL::to('/checkout')}}" class="btn btn-primary check_out">Thanh toán <i class="fas fa-arrow-circle-right"></i></a>
										
										<?php
											}else{
										?>
											<a href="{{URL::to('/login-checkout')}}" class="btn btn-primary check_out">Thanh toán <i class="fas fa-arrow-circle-right"></i></a>
										<?php 
											}
										?>  

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</section>


@endsection