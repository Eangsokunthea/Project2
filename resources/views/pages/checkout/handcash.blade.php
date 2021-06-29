@extends('layout')
@section('content')

	<section id="cart_items">
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
                            <div class="process text-center active">
                                <p><span>03</span></p>
                                <h3>Hoàn tất thanh toán</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $content = Cart::content();
                
                ?>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                        <h2>Cảm ơn bạn đã mua hàng, Đơn hàng của bạn đã đặt thành công</h2>
                        <p>
                            <a href="{{URL::to('/trang-chu')}}" class="btn btn-primary btnbackhome mt-3">Trang chủ</a>
                            <a href="{{URL::to('/')}}" class="btn btn-primary btn-outline mt-3">Tiếp tục mua sắm</a>
                        </p>
                    </div>
                </div>
                <!-- <div class="row mt-5">
                    <div class="col-md-4">
                        <h3 class="billing-title mt-20 pl-15">Thông tin đơn hàng</h3>
                        <table class="order-rable">
                            <tbody>
                                <tr>
                                    <td>Đơn hàng số</td>
                                    <td>: 60235</td>
                                </tr>
                                <tr>
                                    <td>Ngày mua</td>
                                    <td>: Oct 03, 2021</td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td>: ₫ 4.000.000</td>
                                </tr>
                                <tr>
                                    <td>Phương thức thanh toán</td>
                                    <td>: Nhận tiền mặt</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="billing-title mt-20 pl-15">Địa chỉ thanh toán</h3>
                        <table class="order-rable">
                            <tbody>
                                <tr>
                                    <td>Họ Tên</td>
                                    <td>: Nguyễn Văn A</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>: 0123 456 789</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>: Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa </td>
                                </tr>
                                <tr>
                                    <td>Thành Phố</td>
                                    <td>: Hà Nội</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="billing-title mt-20 pl-15">Địa chỉ giao hàng</h3>
                        <table class="order-rable">
                            <tbody>
                                <tr>
                                    <td>Họ Tên</td>
                                    <td>: Nguyễn Văn A</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>: 0123 456 789</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>: Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa </td>
                                </tr>
                                <tr>
                                    <td>Thành Phố</td>
                                    <td>: Hà Nội</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
            </div>
            <div class="container">
                <div class="billing-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="order-wrapper mt-50">
                                <h3 class="billing-title mb-10">Hóa đơn</h3>
								
                                <div class="order-list">
                                    <div class="list-row d-flex justify-content-between">
                                        <div class="col-md-4">SẢN PHẨM</div>
                                        <div class="col-md-4 offset-md-4" align="right">TỔNG CỘNG</div>
                                    </div>
                                    @foreach($content as $v_content)
                                    <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="list-row d-flex justify-content-between">
                                            <div class="col-md-4">Sản phẩm: {{$v_content->name}}</div>
                                            <div class="col-md-4" align="right">x {{$v_content->qty}}</div>
                                            <div class="col-md-4" align="right">
                                                <?php
                                                    $subtotal = $v_content->price * $v_content->qty;
                                                    echo number_format($subtotal).' '.'vnđ';
                                                ?>
                                            </div>

                                        </div>

                                    </form>
                                    @endforeach             
                                    
                                    <div class="list-row border-bottom-0 d-flex justify-content-between">
                                        <div class="col-md-4">
                                            <h5>Tổng</h5>
                                        </div>
                                        <div class="col-md-4 offset-md-4" align="right">{{Cart::subtotal().' '.'vnđ'}}</div>
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