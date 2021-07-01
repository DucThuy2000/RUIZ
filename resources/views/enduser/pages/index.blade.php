@extends("enduser.layout")
@section("front_content")
    <div class="front-content">
        <!-- Home SlideBar -->
        <div class="hero-slider hero-slider-one">
            @foreach($slidebars as $key => $slidebar)
                <div class="single-slide" style="background-image: url({{ \App\Helper\Functions::getImage('banner', $slidebar -> picture) }})">
                    <div class="hero-content-one container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="slider-content-text text-left">
                                    <h5>{{ $slidebar -> sale }}</h5>
                                    <h1>{{ $slidebar -> name }}</h1>
                                    <p> {{ $slidebar -> description }} </p>
                                    <p>Starting At <strong>{{ number_format($slidebar -> price_base) }} VNĐ</strong></p>
                                    <div class="slide-btn-group">
                                        <a href="#" class="btn btn-bordered btn-style-1">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Home SlideBar Section End -->

        <!-- Banner Area Start -->
        <div class="banner-area section-pt">
            <div class="container">
                <div class="row">
                    @foreach($banner_below_slidebar as $banner)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-banner mb-30">
                                <a href="#">
                                    <img
                                        style="border-radius: 5px;"
                                        src="{{ \App\Helper\Functions::getImage("banner", $banner -> picture) }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Sản phẩm bán chạy -->
        <div class="product-area section-pb section-pt-30">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4>Sản phẩm bán chạy</h4>
                        </div>
                    </div>
                </div>

                <div class="row product-active-lg-4">
                    @foreach($best_seller as $product)
                        <div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img class="primary-image" src="{{ \App\Helper\Functions::getImage("product", $product -> picture) }}" alt="">
                                    </a>
                                    <div class="action-links">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="">{{ $product -> name }}</a></h4>
                                    <div class="price-box">
                                        @if($product -> price_final == $product -> price_base)
                                            <span class="new-price">${{ number_format($product -> price_final) }}</span>
                                        @else
                                            <span class="new-price">${{ number_format($product -> price_final) }}</span>
                                            <span class="old-price">${{ number_format($product -> price_base) }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product Area End -->

        <!-- Banner Area Start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    @foreach($banners as $item)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-banner mb-30">
                                <a href="#">
                                    <img
                                        style="border-radius: 5px;"
                                        src="{{ \App\Helper\Functions::getImage("banner", $item -> picture) }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Sản phẩm mới -->
        <div class="product-area section-pb section-pt-30">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4>Sản phẩm sale</h4>
                        </div>
                    </div>
                </div>

                <div class="row product-active-lg-4">
                    @foreach($product_sale as $product)
                        <div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img class="primary-image" src="{{ \App\Helper\Functions::getImage("product", $product -> picture) }}" alt="">
                                    </a>
                                    <div class="action-links">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="">{{ $product -> name }}</a></h4>
                                    <div class="price-box">
                                        @if($product -> price_final == $product -> price_base)
                                            <span class="new-price">${{ number_format($product -> price_final) }}</span>
                                        @else
                                            <span class="new-price">${{ number_format($product -> price_final) }}</span>
                                            <span class="old-price">${{ number_format($product -> price_base) }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product Area End -->

        <!-- our-brand-area start -->
        <div class="our-brand-area section-pb"          >
            <div class="container">
                <div class="row our-brand-active">
                    @foreach($partners as $partner)
                        <div class="brand-single-item d-flex align-items-center justify-content-center">
                            <a href="#">
                                <img src="{{ \App\Helper\Functions::getImage("partner", $partner -> picture, "thumbnail") }}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- our-brand-area end -->

        <!-- letast blog area Start -->
        <div class="letast-blog-area section-pb">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 30 Oct 2019
                                </div>
                                <h4><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html" class="articles-name">Ruiz Watch is one of the web's most visited watch sites and the world's</a></h4>
                            </div>
                            <div class="articles-image">
                                <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html">
                                    <img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/blog/blog-01.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 20 Oct 2019
                                </div>
                                <h4><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html" class="articles-name">Ruiz Watch reviews and most popular watch & timepiece blog for serious </a></h4>
                            </div>
                            <div class="articles-image">
                                <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html">
                                    <img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/blog/blog-02.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 13 Oct 2019
                                </div>
                                <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html" class="articles-name">Connected to the World: Introducing the G-Shock MTG-B1000-1A</a>
                            </div>
                            <div class="articles-image">
                                <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html">
                                    <img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/blog/blog-03.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- letast blog area End -->

        <div class="newletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newletter-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12">
                                    <div class="newsletter-title mb-30">
                                        <h3>Join Our <br><span>Newsletter Now</span></h3>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-7">
                                    <div class="newsletter-footer mb-30">
                                        <input type="text" placeholder="Your email address...">
                                        <div class="subscribe-button">
                                            <button class="subscribe-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

