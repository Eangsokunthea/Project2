@extends('layout')
@section('content')

    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                                        <h2><span style="font-size: 18px;">Kết quả tìm kiếm</span></h2>
                                    </div>
                                </div>
                                <div class="row"> 
                                @foreach($search_product as $key => $product)
                                    <div class="item col-md-3">
                                        <div class="card">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" class="card-img-top" alt="...">
                                            <div class="addcart text-center">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></span>
                                                    <span class="addeye"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_slug)}}"><i class="fas fa-eye"></i></a></span>
                                                </p>
                                            </div>    
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{$product->product_name}}</p>
                                            <span class="price-new flexbox-content text-left">{{number_format($product->product_price).' '.'VNĐ'}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </section>
@endsection