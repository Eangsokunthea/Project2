<!DOCTYPE html>
<html>

<head>

    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="author" content="">
    <link  rel="canonical" href="{{$url_canonical}}" />
    <link  rel="icon" type="image/x-icon" href="" />

    

<!-- ------------------------------------------------------------------>


    <title>{{$meta_title}}</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/my-layout.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/Css_web/style.css')}}" type="text/css">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" >

    <style>
        h6{
            color: #fff;

        }
    
   
    </style>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
     <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header-section">
        <div class="header-top">
        <?php
            $content = Cart::content();
            
        ?>
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.sokuntheaeang198@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                         092.830.979.8
                    </div>
                </div>
                <div class="ht-right">
                    <?php
                        $customer_id = Session::get('customer_id');
                        if($customer_id!=NULL){ 
                    ?>
                        <a href="{{URL::to('/logout-checkout')}}" class="login-panel" style="color: #ffb01f !important;"><i class="far fa-user"></i> 
                            <?php
                                $customer_name = Session::get('customer_name');
                                if($customer_name){
                                    echo $customer_name;                       
                                }
                            ?>
                        </a>
                    
                    <?php
                        }else{
                    ?>
                        <a href="{{URL::to('/dang-nhap')}}" class="login-panel"><i class="fa fa-lock"></i> Login</a>
                    <?php 
                        }
                    ?>


                    <div class="lan-selector">
                        <!-- <select class="">
                            <option value="">English</option>
                            <option value="">Viet Nam</option>
                        </select> -->
                        <select class="language_drop" name="countries" id="countrie" style="width:300px;">
                            <option value='yt' data-image="public/frontend/imgs/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="public/frontend/imgs/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                       
                    </div>
                    
                    <div class="top-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{URL::to('/')}}">
                                <img src="{{asset('public/frontend/assets/images/icon/logoCOM.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 mt-3">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                        {{csrf_field()}}
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All Categories</button>
                                <div class="input-group" >
                                    <input type="text" style="color: #000;" name="keywords_submit" placeholder="What do you need?">
                                    <button type="submit" name="search_items" ><i class="fas fa-search"></i></button>
                                </div>                          
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 text-right col-md-3 mt-3">
                    
                        <ul class="nav-right">
                            <!-- <li class="heart-icon">
                                <a href="#">
                                    <i class="far fa-heart"></i>
                                    <span>1</span>
                                </a>
                            </li> -->
                            <li class="cart-icon">
                                <a href="#">
                                <i class="fas fa-shopping-bag" style="color:#000080;"></i>
                                    <span>{{Cart::count()}}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            @foreach($content as $v_content)
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="70" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{number_format($v_content->price).' '.'vn??'}} x {{$v_content->qty}}</p>
                                                            <h6>{{$v_content->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times" style="color: #ff1f1f"></i></a>	
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>
                                            {{Cart::subtotal().' '.'vn??'}}
                                        </h5>
                                    </div>
                                    <div class="select-button">                               
                                        <a href="{{URL::to('/show-cart')}}" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="{{URL::to('/checkout')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                                        
                                    </div>
                                </div>
                            </li>

                            <li class="cart-price">{{Cart::subtotal().' '.'vn??'}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item" style="background: #000080 !important;">
            <div class="container" >
                <nav class="nav-menu mobile-menu" >
                    <ul>  
                        <li><a href="#"><i class="fas fa-list-ul"></i><span> &nbsp;Danh m???c</span>&nbsp; <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown">
                                @foreach($category as $key => $cate)
                                <li>
                                    <a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">
                                        {{$cate->category_name}}
                                    </a>
                                </li>
                                @endforeach  
                            </ul>
                        </li>   
                        <li><a href="#"><i class="fas fa-list-ul"></i> &nbsp;Brand &nbsp; <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown">
                                @foreach($brand as $key => $brand)
                                <li>
                                    <a href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}">
                                        {{$brand->brand_name}}
                                    </a>
                                </li>
                                @endforeach           
                            </ul>
                        </li>           
                        <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('/trang-chu')}}">S???n ph???m</a></li>
                        <li><a href="{{URL::to('/gioi-thieu')}}">Gi???i thi???u</a></li>
                        <li><a href="{{URL::to('/lien-he')}}">Li??n h???</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{URL::to('/show-cart')}}">Shopping Cart</a></li>
                                <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                                <li><a href="{{URL::to('/dang-nhap')}}">Register</a></li>
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){ 
                                ?>
                                <li><a href="{{URL::to('/logout-checkout')}}" class="login-panel">Logout </a></li>           
                                    <?php
                                        }
                                    ?>
                                   
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    <!-- <section class="hero-section">
        <div class="hero-items owl-carousel owl-loaded owl-drag">              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3038px, 0px, 0px); transition: all 0s ease 0s; width: 9116px;"><div class="owl-item cloned" style="width: 1519.2px;"><div class="single-hero-items set-bg" data-setbg="public/frontend/assets/images/banner/banner001.jpg" style="background-image: url(&quot;public/frontend/assets/images/banner/banner001.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1 style="color: #ffb01f !important;">Black friday</h1>
                            <p style="color: #ffb01f !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-item cloned" style="width: 1519.2px;"><div class="single-hero-items set-bg" data-setbg="public/frontend/assets/images/banner/banner003.jpg" style="background-image: url(&quot;public/frontend/assets/images/banner/banner003.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1 style="color: #ffb01f !important;">Black friday</h1>
                            <p style="color: #ffb01f !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div></div><div class="owl-item animated owl-animated-in fadeIn active" style="width: 1519.2px;"><div class="single-hero-items set-bg" data-setbg="public/frontend/assets/images/banner/banner001.jpg" style="background-image: url(&quot;public/frontend/assets/images/banner/banner001.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1 style="color: #ffb01f !important;">Black friday</h1>
                            <p style="color: #ffb01f !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div></div><div class="owl-item animated owl-animated-in fadeIn" style="width: 1519.2px;"><div class="single-hero-items set-bg" data-setbg="public/frontend/assets/images/banner/banner003.jpg" style="background-image: url(&quot;public/frontend/assets/images/banner/banner003.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1 style="color: #ffb01f !important;">Black friday</h1>
                            <p style="color: #ffb01f !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div></div><div class="owl-item cloned" style="width: 1519.2px;"><div class="single-hero-items set-bg" data-setbg="public/frontend/assets/images/banner/banner001.jpg" style="background-image: url(&quot;public/frontend/assets/images/banner/banner001.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1 style="color: #ffb01f !important;">Black friday</h1>
                            <p style="color: #ffb01f !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>public/frontend/imgs/flag-1.jpg
                    </div>
                </div>
            </div></div><div class="owl-item cloned" style="width: 1519.2px;"><div class="single-hero-items set-bg" data-setbg="public/frontend/assets/images/banner/banner003.jpg" style="background-image: url(&quot;public/frontend/assets/images/banner/banner003.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1 style="color: #ffb01f !important;">Black friday</h1>
                            <p style="color: #ffb01f !important;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div></div></div></div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><i class="fas fa-angle-left" style="color: #fff;"></i></button>
                <button type="button" role="presentation" class="owl-next"><i class="fas fa-angle-right" style="color: #fff;"></i></button>
            </div>
            <div class="owl-dots disabled"></div></div>
    </section> -->

                                            
                                                            
    <!-- slide -->
  
   
    @yield('slide')

    <div class="container-fluid baner_img mt-5 mb-5"></div>
                    
    <!-- index -->
    @yield('content')
    
    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="fb-share-button" data-href="http://localhost/lrv8computer/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div> -->
    
    <footer>
        <div class="container-fluid footer ">
            <div class="row ">
                <div class="col-md-3 col-lg-3 mt-5">
                    <div class="info ml-4">
                        <img style="width: 200px; margin-bottom: 15px; " src="{{('public/frontend/assets/images/icon/logoCOM.png')}}" alt=" ">
                        <h6>C??ng ty TNHH A&M | 5S Vi???t Nam</h6>
                        <span style="opacity: 0.5; font-size: 12px; "><b>Website</b> ???????c ph??t tri???n & v???n h??nh b???i <br> h??? th???ng: <b>?????NG H??? CH??NH H??NG</b> <br>
                            ?????a ch???: T???ng 5, T??a nh?? 169, B??i Th??? Xu??n, Qu???n Hai B?? Tr??ng,HN <br>
                            M?? s??? doanh nghi???p: 1238309798 <br>
                            C???p ng??y: 27/12/2021 | N??i c???p: H?? N???i <br>
                            Email: hotro@donghochinhhang.com <br>
                            Tel: (092) 830 9798 </span>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 mt-5">
                    <div class="customer ml-3">
                        <h6>KH??CH H??NG</h6>
                        <span style="opacity: 0.5; font-size: 12px; ">Ch??nh s??ch b???o m???t<br>
                            H?????ng d???n mua h??ng <br>
                            Kh??ch h??ng c???n thi???t <br>
                            Tri ??n kh??ch h??ng <br>
                            H??? th???ng Showroom <br>
                            H??? th???ng kh??ch h??ng <br>
                            Review s???n ph???m <br>
                            B??? suu t???p Longines <br>
                            B??? s??u t???p Tisot
                         </span>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 mt-5">
                    <h6>TH??NG TIN H??? TR???</h6>
                    <span style="opacity: 0.5; font-size: 12px; ">Quy ?????nh chung <br>
                            Ch??nh s??ch b???o m???t Th??ng tin <br>
                            Ch??nh s??ch v??n chuy???n v?? l???p ?????t <br>
                            Ch??nh s??ch b???o h??nh <br>
                            Ch??nh s??ch ?????i tra v?? ho??n ti???n <br>
                            Quy ?????nh gi?? c??? v?? h??nh th???c th??nh to??n <br>
                            Ch??nh s??ch tr??? g??p <br>
                         </span>
                </div>
                <div class="col-md-3 col-lg-3 mt-5">

                    <div class="row ">
                        <div class="col-md-12 col-lg-12 ">
                            <h6>K???T N???I V???I CH??NG T??I</h6>
                            <span style="opacity: 0.5; font-size: 12px; ">????? ???????c h??? tr??? t???t nh???t</span> <br>
                            <img src="https://www.tatthanh.com.vn/Themes/Theme01/Assets/Css/Images/_Icon/dtb-bct.png " class="mt-2 mb-2 mr-3 " alt=" ">
                            <a href="# "><img src="https://www.tatthanh.com.vn/Themes/Theme01/Assets/Css/Images/_Icon/xembando.png " alt=" "></a>
                            <div class="social mt-2 mb-2 ">
                                <ul class="list-unstyled clearfix ">
                                    <li class="facebook ">
                                        <a target="_blank " href="# " class="fab fa-facebook-f "></a>
                                    </li>
                                    <li class="twitter ">
                                        <a class="fab fa-twitter " target="_blank " href="# "></a>
                                    </li>
                                    <li class="google-plus ">
                                        <a class="fab fa-google-plus-g " target="_blank " href="# "></a>
                                    </li>
                                    <li class="rss ">
                                        <a class="fab fa-instagram " target="_blank " href="# "></a>
                                    </li>
                                    <li class="youtube ">
                                        <a class="fab fa-youtube " target="_blank " href="# "></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <img src="{{('public/frontend/assets/images/ads/ad01.jpg')}}" style="width: 100%; margin-top: 5px; " alt=" ">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <b class="text-right ml-5">Ph????ng th???c th??nh to??n</b>
                    <div class="social mt-2 mb-2 ">

                        <ul class="list-unstyled clearfix ml-3 mt-2">
                            <li class="qrcode" style="margin-right: 20px;">
                                <a target="_blank " href="# " class="fas fa-qrcode"></a>
                                <p style="font-size: 11px;">QR Code</p>
                            </li>
                            <li class="money" style="margin-right: 20px;">
                                <a class="fas fa-dollar-sign " target="_blank " href="# "></a>
                                <p style="font-size: 11px;">Ti???n m???t</p>
                            </li>
                            <li class="clock " style="margin-right: 20px;">
                                <a class="far fa-clock " target="_blank " href="# "></a>
                                <p style="font-size: 11px;">Tr??? g??p</p>
                            </li>
                            <li class="money-check" style="margin-right: 20px;">
                                <a class="fas fa-money-check " target="_blank " href="# "></a>
                                <p style="font-size: 11px;">Internet <br>Banking</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <b>Nh??n h??ng th??nh to??n online</b>
                    <div class="payment mt-2 mb-2">
                        <ul class="list-unstyled clearfix mt-2">
                            <li class="paypal">
                                <img src="{{('public/frontend/assets/images/icon/ppal.png')}}" style="width: 40px; float: left;margin-right: 10px;" alt="">
                            </li>
                            <li class=" visa ">
                                <img src="{{('public/frontend/assets/images/icon/visa.jpg')}} " style="width: 40px;float: left;margin-right: 10px; " alt=" ">
                            </li>
                            <li class="paypal">
                                <img src="{{('public/frontend/assets/images/icon/ppal.png')}}" style="width: 40px; float: left;margin-right: 10px;" alt="">
                            </li>
                            <li class=" visa ">
                                <img src="{{('public/frontend/assets/images/icon/visa.jpg')}} " style="width: 40px;float: left;margin-right: 10px; " alt=" ">
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
        <div class="container-fluid baner_img "></div>
        <div class="container-fluid text-center pt-3 pb-3 " style="background: #0f0f0f; color: #fff; ">
            <b style="opacity: 0.5; ">&copy; &nbsp;</b><span style="font-family: Arial, Helvetica, sans-serif; "><i>Design by: Eang Sokunthea </i></span><b style="color: red; "> &hearts; </b>
        </div>
    </footer>
   
    <script src="{{asset('public/frontend/Js_web/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/jquery.dd.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/jquery.slicknav.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontend/Js_web/main.js')}}"></script>
    
    
     
    <script src="{{asset('public/frontend/js/jquery-3.6.0.min.js ')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-3.3.1.slim.min.js')}} "></script>
    <script src="{{asset('public/frontend/js/popper.min.js ')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('public/frontend/js/owl.carousel.js')}} "></script>
    
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="sQKC8NGZ"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    
  

    <script>

        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        }
    </script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>

    <script>
        var quantity = 1;
        $('.quantity-right-plus').click(function() {
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e) {
            var quantity = parseInt($('#quantity').val());
            if (quantity > 1) {
                $('#quantity').val(quantity - 1);
            }
        });
    </script>

    
        
    
</body>

</html> 