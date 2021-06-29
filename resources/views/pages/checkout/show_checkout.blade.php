@extends('../layout')


@section('content')
    <section>

	<?php
	$content = Cart::content();
	
	?>
        <div class="col-shop">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Giỏ hàng</h3>
                            </div>
                            <div class="process text-center active">
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
                <div class="row mt-5">
                    <div class="col-md-7">
                        <form  action="{{URL::to('save-checkout-customer')}}" method="POST" class="colorlib-form">
						@csrf
                            <h2>Chi tiết thanh toán</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fname">Họ &amp; Tên</label>
                                        <input type="text" name="shipping_name" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fname">Địa chỉ</label>
                                        <input type="text" name="shipping_address" class="form-control" placeholder="Nhập địa chỉ của bạn">
                                    </div>
                                </div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Địa chỉ email</label>
                                        <input type="email" name="shipping_email" class="form-control" placeholder="Ex: youremail@domain.com">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="Phone">Số điện thoại</label>
                                        <input type="text" name="shipping_phone" class="form-control" placeholder="Ex: 0123456789">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="Phone">Ghi chú đơn hàng của bạn</label>
										<textarea name="shipping_notes" class="form-control" placeholder="Ghi chú đơn hàng của bạn" rows="5" style="resize: none;"></textarea>
									</div>
								</div>
                                <div class="form-group">
                                    <div class="col-md-12">
										<button type="submit" name="send_order" class="btn btn-primary subtotal" href="">Gửi</button>
                                    </div>
                                </div>
                            </div>							
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="cart-detail">
						
                            <h2>Tổng Giỏ hàng</h2>
                            <ul>
								@foreach($content as $v_content)
                                <li>
                                    <ul>
                                        <li><span>{{$v_content->qty}} x {{$v_content->name}}</span> <span>{{number_format($v_content->price).' '.'vnđ'}}</span></li>
                                    </ul>
                                </li>
								@endforeach

                                <li><span>Tổng tiền đơn hàng</span> <span>{{Cart::subtotal().' '.'vnđ'}}</span></li>
                            </ul>
                        </div>
						

                        <div class="row">
                            <div class="col-md-12">
                            <!-- ?php
                                $customer_id = Session::get('customer_id');
                                $shipping_id = Session::get('shipping_id');
                                if($customer_id!=NULL && $shipping_id==NULL){ 
                                ?>
                                <a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                            
                            ?php
                                }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                ?>
                                <a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                ?php 
                            }else{
                            ?>
                                <a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                            ?php
                                }
                            ?> -->
                                <!-- <a href="">
                                    <p><button type="submit" class="btn btn-primary subtotal" href="complete.html">Thanh toán</button></p>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection    