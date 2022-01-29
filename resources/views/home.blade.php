@extends('layouts.app')
@section('content')

<div class="header_section">
        <div class="banner_section">
            <div class="container-fluid">
                <section class="slide-wrapper">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <div class="col-sm-2 padding_0">
                        <p class="mens_taital"></p>
                        <p class="mens_taital_2"></p>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner_taital">
                            <h1 class="banner_text">Bakery Shop </h1>
                            <h1 class="mens_text"><strong>Toko Kue Spesial</strong></h1>
                            <p class="lorem_text">Menyediakan berbagai macam jenis kue dan roti yang lezat dan bergizi.</p>
                            <button class="buy_bt">Buy Now</button>
                            <button class="more_bt">See More</button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="shoes_img"><img src="{{ URL::asset('img/kue4.png') }}"></div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                    <div class="col-sm-2 padding_0">
                        <p class="mens_taital"></p>
                        <p class="mens_taital_2"></p>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner_taital">
                            <h1 class="banner_text">Bakery Shop </h1>
                            <h1 class="mens_text"><strong>Toko Kue Spesial</strong></h1>
                            <p class="lorem_text">Tersedia dengan kemasan cantik dan menarik serta dengan harga yang terjangkau</p>
                            <button class="buy_bt">Buy Now</button>
                            <button class="more_bt">See More</button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="shoes_img"><img src="{{ URL::asset('img/kue3.png') }}" width="500" height="500"></div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                    <div class="col-sm-2 padding_0">
                        <p class="mens_taital"></p>
                        <p class="mens_taital_2"></p>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner_taital">
                            <h1 class="banner_text">Bakery Shop </h1>
                            <h1 class="mens_text"><strong>Toko Kue Spesial</strong></h1>
                            <p class="lorem_text">Tersedia dengan berbagai macam bentuk karakter yang menarik.</p>
                            <button class="buy_bt">Buy Now</button>
                            <button class="more_bt">See More</button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="shoes_img"><img src="{{ URL::asset('img/kue5.png') }}"></div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                    <div class="col-sm-2 padding_0">
                        <p class="mens_taital"></p>
                        <p class="mens_taital_2"></p>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner_taital">
                            <h1 class="banner_text">Bakery Shop </h1>
                            <h1 class="mens_text"><strong>Toko Kue Spesial</strong></h1>
                            <p class="lorem_text">Transaksi yang dilakukan sangat mudah sehingga tidak menyulitkan pelanggan</p>
                            <button class="buy_bt">Buy Now</button>
                            <button class="more_bt">See More</button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="shoes_img"><img src="{{ URL::asset('img/kue1.png') }}"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>          
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- new collection section start -->
    <div class="layout_padding collection_section">
        <div class="container">
            <h1 class="new_text"><strong>Produk Terbaru</strong></h1>
            <p class="consectetur_text">Terdapat produk terbaru dari kue dan roti yang dijual di website ini</p>
            <div class="collection_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <button class="new_bt">New</button>
                            <div class="shoes-img"><img src="{{ URL::asset('img/bronies.png') }}" width="200" height="200"></div>
                            <p class="sport_text">Brownies Coklat</p>
                            <div class="star_icon">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                        <button class="seemore_bt">See More</button>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img2">
                            <div class="shoes-img2"><img src="{{ URL::asset('img/kue6.png') }}" height="200" width="200"></div>
                            <p class="sport_text">Dessert</p>
                            <div class="star_icon">
                                <ul>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ URL::asset('img/star-icon.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collection_section">
        <div class="container">
            <h1 class="new_text"><strong>New Diskon</strong></h1>
            <p class="consectetur_text">There is the latest discount, make a purchase immediately so you don't miss it</p>
        </div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
        <div class="container">
            <div class="racing_shoes">
                <div class="row">
                    <div class="col-md-8">
                        <div class="shoes-img3"><img src="{{ URL::asset('img/bronies.png') }}" width="500" height="500"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale_text"><strong>New <br><span style="color: #0a0506;">Diskon</span> <br>NOW!</strong></div>
                        <div class="number_text"><strong>- <span style="color: #0a0506">20%</span></strong></div>
                        <button class="seemore">See More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection