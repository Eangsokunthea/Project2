@extends('layout')

@section('slide')

    <section>
        <div class="container-fluid p-0">
            <!-- <div class="row"> -->
                <!-- <div class="col-md-3">
                    <img src="{{asset('public/frontend/assets/images/ads/ads001.jpg')}}" class="d-block w-100 mt-2" alt="...">
                    <img src="{{asset('public/frontend/assets/images/ads/ad04.jpg')}}" class="d-block w-100 mt-2" alt="...">
                    <img src="{{asset('public/frontend/assets/images/ads/ad05.jpg')}}" class="d-block w-100 mt-2" height="140px" alt="...">
                   
                </div>  -->
                <!-- <div class="col-md-12" > -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('public/frontend/assets/images/banner/banner001.jpg')}}" class="d-block w-100" height="570px " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('public/frontend/assets/images/banner/banner003.jpg')}}" class="d-block w-100" height="570px " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('public/frontend/assets/images/banner/banner006.jpg')}}" class="d-block w-100" height="570px " alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </section>
@endsection        