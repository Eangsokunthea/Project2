@extends('layout')

@section('slide')
    @include('pages.slide')
@endsection 

@section('content')

    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                                        <h2><span style="font-size: 18px;">Tất cả sản phẩm</span></h2>
                                    </div>
                                </div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>{{session()->get('message')}}</strong>
                                    </div>
                                @endif                                
                                
                                <div class="row"> 
                                    @foreach($all_product as $key => $product)
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

                                                        <!-- <input type="submit" value="Giỏ hàng" class="btn btn-info add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart">    -->
                                                        <!-- <span><a type="submit" class="add-to-cart" name="add-to-cart" data-id_product="{{$product->product_id}}" ><i class="fas fa-shopping-cart"></i></a></span> -->
                                                        <!-- <span class="addeye "><a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}"><i class="fas fa-eye"></i></a></span> -->
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
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                {!!$all_product->links()!!}
                            </ul>
                        </div>
                    </div>

                </div>                                        
            </div>
        </div>
    </section>
    
</nav>
    
    <!-- <section>
        <div class="container-fluid p-0 mt-3">
            <img src="https://png.pngtree.com/back_origin_pic/00/03/50/2ececc7e00f14aeae3ddc9438041a93a.jpg" style="width: 100%;  " alt="">
        </div>
    </section>

    <div class="container-fluid baner_img mt-5 mb-5"></div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>Sản phẩm Nổi bật</span></h2>
                    <p>Đây là những sản phẩm được ưa chuộng nhất năm 2021</p>
                </div>
            </div>
            <div class="item col-md-3">
                <div class="card">
                    <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" class="card-img-top" alt="...">
                    <span class="product-percent-sale-new hidden-xs">-50%</span>
                    <div class="addcart text-center">
                        <p>
                            <span class="addtocart"><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></span>
                            <span class="addeye"><a href="detail.html"><i class="fas fa-eye"></i></a></span>
                        </p>
                    </div>    
                </div>
                <div class="card-body">
                    <p class="card-text">Lenovo</p>
                    <span class="price-new flexbox-content text-left">23462$</span>
                    <span class="price-old flexbox-content text-right">10,235,000₫</span>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>Sản phẩm Nổi mới</span></h2>
                    <p>Đây là những sản phẩm được ưa chuộng nhất năm 2021</p>
                </div>
            </div>

            <div class="row"> 
                <div class="item col-md-3">
                    <div class="card">
                        <img src="{{('public/frontend/assets/images/product/comp03.jpg')}}" class="card-img-top" alt="...">
                        <span class="product-percent-sale-new hidden-xs">-50%</span>
                        <div class="addcart text-center">
                            <p>
                                <span class="addtocart"><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></span>
                                <span class="addeye"><a href="detail.html"><i class="fas fa-eye"></i></a></span>
                            </p>
                        </div>    
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lenovo</p>
                        <span class="price-new flexbox-content text-left">23462$</span>
                        <span class="price-old flexbox-content text-right">10,235,000₫</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   

@endsection        
