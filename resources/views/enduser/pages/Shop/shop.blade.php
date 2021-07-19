@extends("enduser.layout")
@section("front_content")
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    @include("enduser.components.breadcrumb", ['currentPage' => 'Shop'])
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <!-- main-content-wrap start -->
    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    <!-- shop-sidebar-wrap start -->
                    <div class="shop-sidebar-wrap">
                        <div class="shop-box-area">
                            @include("enduser.components.sidebar_categories" , ["categories" => $categories])
                            @include("enduser.components.sidebar_filter_price")
                            <!-- shop-sidebar start -->
                            @include("enduser.components.sidebar_tags")
                            <!-- shop-sidebar end -->

                        </div>
                    </div>
                    <!-- shop-sidebar-wrap end -->
                </div>
                <div class="col-lg-9 order-lg-2 order-1">

                    <!-- shop-product-wrapper start -->
                    <div class="shop-product-wrapper">
                        <div class="row align-itmes-center">
                            <div class="col">
                                <!-- shop-top-bar start -->
                                <div class="shop-top-bar">
                                   @include("enduser.components.sort")
                                </div>
                                <!-- shop-top-bar end -->
                            </div>
                        </div>

                        <!-- shop-products-wrap start -->
                        <div class="shop-products-wrap">
                            <div class="tab-content">
                                <div class="tab-pane active" id="grid">
                                    <div class="shop-product-wrap">
                                        <div class="row">
                                            @foreach($products as $product)
                                                <div class="col-lg-4 col-md-6">
                                                <!-- single-product-area start -->
                                                <div class="single-product-area mt-30">
                                                    <div class="product-thumb">
                                                        <a class="product-wrapper" href="{{ route("shop.productDetail", ['slug' => $product -> slug]) }}">
                                                            <img class="primary-image" src="{{ \App\Helper\Functions::getImage("product", $product->picture) }}" alt="">
                                                        </a>
                                                        @switch($product -> type)
                                                            @case("new")
                                                                <div class="label-product label-new">New</div>
                                                            @break
                                                            @case("sale")
                                                                <div class="label-product label-sale">Sale</div>
                                                            @break
                                                        @endswitch
                                                        @include("enduser.components.actions", ["id_cart" => $product -> id])
                                                    </div>
                                                    <div class="product-caption">
                                                        <h4 class="product-name"><a href="#">{{ $product -> name }}</a></h4>
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
                            </div>
                        </div>
                        <!-- shop-products-wrap end -->

                        <!-- paginatoin-area start -->
                        @include("enduser.components.pagination", ["pagination" => $products])
                        <!-- paginatoin-area end -->
                    </div>
                    <!-- shop-product-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
@stop
