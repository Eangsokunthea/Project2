@extends('layout')

@section('content')
    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                                    <h2><span style="font-size: 18px;">Thương hiệu Sản phẩm</span></h2>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                    
                            @foreach($brand_by_id as $key => $product)
                                    <div class="item col-md-3">
                                        <form action="{{URL::to('/add-cart-ajax')}}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                          
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">
                                            
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" name="qty" class="cart_product_qty_{{$product->product_id}}">

                                            <div class="card">
                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" class="card-img-top" alt="...">
                                                <!-- <span class="product-percent-sale-new hidden-xs">-50%</span> -->
                                                <div class="addcart text-center">
                                                    <p>
                                                        <input type="hidden" name="productid_hidden" value="{{$product->product_id}}">

                                                        <?php
                                                            $customer_id = Session::get('customer_id');
                                                            if($customer_id!=NULL){ 
                                                        ?>
                                                            <a href=""><input type="submit" value="Giỏ hàng" class="btn btn-info add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart"></a> 

                                                        <?php
                                                            }else{
                                                        ?>
                                                            <a href="{{URL::to('/dang-nhap')}}"><input type="button" value="Giỏ hàng" class="btn btn-info"></a>
                                                        <?php 
                                                            }
                                                        ?>  
                                                        <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}"><input type="button" value="Xem" class="btn btn-info"></a>

                                                    </p>
                                                </div>    
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{$product->product_name}}</p>
                                                <span class="price-new flexbox-content text-left">{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</span>
                                              
                                            </div>
                                        </form>

                                    </div>
                                

                            @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
   
@endsection  