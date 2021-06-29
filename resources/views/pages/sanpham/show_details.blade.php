@extends('../layout')


@section('content')
@foreach($product_details as $key => $value)
    <section>   
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-10 col-md-offset-1">
                    <div class="product-detail-wrap">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-entry">
                                    <!-- <div class="product-img" style="background-image: url('public/uploads/product/comp036.jpg');">

                                    </div> -->
                                    <img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" class="card-img-top" alt="...">
                                    
                                    <div class="row mt-3">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item"><img src="{{asset('public/frontend/assets/images/product/comp10.jpg')}}" class="card-img-top" alt="..."></div>
                                            <div class="item"><img src="{{asset('public/frontend/assets/images/product/comp06.jpg')}}" class="card-img-top" alt="..."></div>
                                            <div class="item"><img src="{{asset('public/frontend/assets/images/product/comp03.jpg')}}" class="card-img-top" alt="..."></div>
                                            <div class="item"><img src="{{asset('public/frontend/assets/images/product/comp05.jpg')}}" class="card-img-top" alt="..."></div>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-7">
                                <form action="{{URL::to('/save-cart')}}" method="POST">
                                @csrf
                                    <div class="desc">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>{{$value->product_name}}</h3>
                                                <p>Mã ID: {{$value->product_id}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p><b>Số lượng kho còn:</b> {{$value->product_quantity}}</p>
                                                <p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
                                                <p><b>Danh mục:</b> {{$value->category_name}}</p> -->
                                            </div>
                                        </div>
                                            
                                        <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

                                        <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

                                        <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">

                                        <input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

                                        <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">

                                        <p class="price">
                                            <span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>
                                        </p> 

                                        <ul style="font-size: 13px;">
                                            <li>- 11th Gen Intel EVO Core i7-1165G7</li>
                                            <li>- RAM : 16GB (4267MHz) | 512GB PCIe</li>
                                            <li>- 14″ UHD (3840 x 2160) IPS Touch</li>
                                            <li>- VGA : Intel Iris Xe Graphics</li>
                                            <li>- IR camera with (TOF) and (ALS)</li>
                                            <li>- Windows 10 Pro License</li>
                                            <li>- 4-cell (71Wh), integrated upto 23Hrs</li>
                                            <li>- 1.3Kg | Shadow Black | CMS !!</li>
                                            <li>- Code: UL2505U1300B3</li> 
                                            <li>- --------------------------</li>
                                            <li>- Free : Sleeve, Wireless Mouse, Pad</li>
                                            <li>- Free : new Flash Drive 64GB</li>
                                        </ul>

                                        <div class="row row-pb-sm mb-3 mt-4">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="qty" class="form-control input-number cart_product_qty_{{$value->product_id}}" value="1" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>   
                                        <input type="hidden" name="productid_hidden" value="{{$value->product_id}}">
                                        <?php
                                            $customer_id = Session::get('customer_id');
                                            if($customer_id!=NULL){ 
                                        ?>
                                            <a href=""><input type="submit" value="Thêm vào giỏ hàng" class="btn btn-info add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart"></a> 

                                        <?php
                                            }else{
                                        ?>
                                            <a href="{{URL::to('/dang-nhap')}}"><input type="button" value="Thêm vào giỏ hàng" class="btn btn-info"></a>
                                        <?php 
                                            }
                                        ?> 
                                        
                                        <!-- <input type="submit" value="Thêm vào giỏ hàng" class="btn btn-primary btn-sm add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">      -->
                                                              
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="row mt-5 mb-5">
                            <p style="color: red;">thông tin</p>
                            <p style="text-align: justify;">
                                BLUESKY STORE sẽ giao hàng tận nơi khi chọn mua sản phẩm: Áo Sơ Mi Trắng Kem ASM844. Hoặc quí khách có thể đến tại địa chỉ shop có hiển thị bên dưới, khi chọn size phù hợp để xem và thử trực tiếp.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection        