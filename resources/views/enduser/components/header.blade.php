@php
    use Harimayco\Menu\Facades\Menu;
    use Harimayco\Menu\Models\MenuItems;
    $menus = MenuItems::all();
@endphp

<header class="header">

    <!-- Header Top Start -->
    <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-top-settings">
                        <ul class="nav align-items-center">
                            <li class="language">English <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list curreny-list">
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#"> € EURO</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="top-info-wrap text-right">
                        <ul class="my-account-container">
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/my-account.html">My account</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html">Cart</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html">Wishlist</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Header Top End -->

    <!-- haeader Mid Start -->
    <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-5">
                    <div class="logo-area">
                        <a href="{{ route("page.index") }}"><img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search-box-wrapper">
                        <div class="search-box-inner-wrap">
                            <form class="search-box-inner">
                                <div class="search-select-box">
                                    <select class="nice-select">
                                        <optgroup label=" Watch">
                                            <option value="volvo">All</option>
                                            <option value="saab">Watch</option>
                                            <option value="saab">Air cooler</option>
                                        </optgroup>
                                        <optgroup label="Fashion">
                                            <option value="mercedes">Womens tops</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="search-field-wrap">
                                    <input type="text" class="search-field" placeholder="Search product...">

                                    <div class="search-btn">
                                        <button><i class="icon-magnifier"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-blok-box text-white d-flex">

                        <div class="user-wrap">
                            <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                        </div>

                        <div class="shopping-cart-wrap">
                            <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                            <ul class="mini-cart">
                                <li class="cart-item">
                                    <div class="cart-image">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html"><img alt="" src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/product/product-02.png"></a>
                                    </div>
                                    <div class="cart-title">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html">
                                            <h4>Product Name 01</h4>
                                        </a>
                                        <div class="quanti-price-wrap">
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                        </div>
                                        <a class="remove_from_cart" href="#"><i class="icon_close"></i></a>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="cart-image">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html"><img alt="" src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/product/product-03.png"></a>
                                    </div>
                                    <div class="cart-title">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html">
                                            <h4>Product Name 03</h4>
                                        </a>
                                        <div class="quanti-price-wrap">
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                        </div>
                                        <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                    </div>
                                </li>
                                <li class="subtotal-box">
                                    <div class="subtotal-title">
                                        <h3>Sub-Total :</h3><span>$ 260.99</span>
                                    </div>
                                </li>
                                <li class="mini-cart-btns">
                                    <div class="cart-btns">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html">View cart</a>
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/checkout.html">Checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- haeader Mid End -->

    <!-- haeader bottom Start -->
    <div class="haeader-bottom-area bg-gren header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="main-menu-area white_text">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation text-center">
                            <ul>
                                @foreach($menus as $menu)
                                    @if($menu -> parent != 0)
                                        <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home Page 1</a></li>
                                                <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/index-2.html">Home Page 2</a></li>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{ $menu -> link }}"> {{ $menu -> label }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-5 col-md-6 d-block d-lg-none">
                    <div class="logo"><a href="index.html"><img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/logo/logo.png" alt=""></a></div>
                </div>


                <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                    <div class="right-blok-box text-white d-flex">

                        <div class="user-wrap">
                            <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                        </div>

                        <div class="shopping-cart-wrap">
                            <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                            <ul class="mini-cart">
                                <li class="cart-item">
                                    <div class="cart-image">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html"><img alt="" src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/product/product-02.png"></a>
                                    </div>
                                    <div class="cart-title">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html">
                                            <h4>Product Name 01</h4>
                                        </a>
                                        <div class="quanti-price-wrap">
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                        </div>
                                        <a class="remove_from_cart" href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="cart-image">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html"><img alt="" src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/product/product-03.png"></a>
                                    </div>
                                    <div class="cart-title">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html">
                                            <h4>Product Name 03</h4>
                                        </a>
                                        <div class="quanti-price-wrap">
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                        </div>
                                        <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                    </div>
                                </li>
                                <li class="subtotal-box">
                                    <div class="subtotal-title">
                                        <h3>Sub-Total :</h3><span>$ 260.99</span>
                                    </div>
                                </li>
                                <li class="mini-cart-btns">
                                    <div class="cart-btns">
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html">View cart</a>
                                        <a href="https://demo.hasthemes.com/ruiz-preview/ruiz/checkout.html">Checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="mobile-menu-btn d-block d-lg-none">
                            <div class="off-canvas-btn">
                                <a href="#"><img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/icon/bg-menu.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- haeader bottom End -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>

            <div class="off-canvas-inner">

                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="icon-magnifier"></i></button>
                    </form>
                </div>

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/index-2.html">Home Page 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                        <ul class="dropdown">
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/shop.html">Shop Left Sidebar</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/shop-list-left.html">Shop List Left Sidebar</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/shop-list-right.html">Shop List Right Sidebar</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/shop-fullwidth.html">Shop Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">Product Details</a>
                                        <ul class="dropdown">
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/product-details.html">Single Product Details</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/variable-product-details.html">Variable Product Details</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/affiliate-product-details.html">affiliatel Product Details</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/gallery-product-details.html">Gallery Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title has-children"><a href="#">Shop Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/error404.html">Error 404</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/compare.html">Compare Page</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html">Cart Page</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/checkout.html">Checkout Page</a></li>
                                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html">Wish List Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog.html">Blog Left Sidebar</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-grid.html">Blog Grid Page</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-largeimage.html">Blog Large Image</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/blog-details.html">Blog Details Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/frequently-questions.html">FAQ</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/my-account.html">My Account</a></li>
                                    <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/login-register.html">login &amp; register</a></li>
                                </ul>
                            </li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/about-us.html">About Us</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/contact-us.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->


                <div class="header-top-settings offcanvas-curreny-lang-support">
                    <h5>My Account</h5>
                    <ul class="nav align-items-center">
                        <li class="language">English <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                            </ul>
                        </li>
                        <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-list curreny-list">
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#"> € EURO</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="top-info-wrap text-left text-black">
                        <h5>My Account</h5>
                        <ul class="offcanvas-account-container">
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/my-account.html">My account</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/cart.html">Cart</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/wishlist.html">Wishlist</a></li>
                            <li><a href="https://demo.hasthemes.com/ruiz-preview/ruiz/checkout.html">Checkout</a></li>
                        </ul>
                    </div>

                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

</header>
