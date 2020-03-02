<header id="header" class=" variantleft type_1">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">


                </div>
                <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
                    <div class="tabBlock1" id="TabBlock-1">
                        <ul class="top-link list-inline">
                        @if (auth()->guest())
                                <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
                                <li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
                                <li class="register"><a href="{{route('register')}}" title="Register"><span>Register</span></a></li>
                        @else
                            <li class="signin"><a href="{{route('login')}}" class="top-link-checkout" title="Sign In"><span>Welcome</span></a></li>
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret" style = "position:relative; left:80px; top:2px ;"  ></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item " href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Header Top -->

    <!-- Header center -->
    <div class="header-center left">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-md-3 col-sm-12 col-xs-7">
                    <a href="{{route('/')}}"><img src="{{asset('user/img/demo/logo/logo51.png')}}" title="Peezar Khana" alt="Peezar Khana"></a>
                </div>
                <!-- //end Logo -->

                <!-- Search -->
                <div id="sosearchpro" class="col-xs-12 col-sm-8 col-md-5 search-pro">

                    <form method="GET" action="index.html">
                        <div id="search0" class="search input-group">
                            <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
                            <span class="input-group-btn">
										<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
									</span>
                        </div>

                    </form>

                </div>
                <!-- //end Search -->

                <!-- Secondary menu -->
                <div class="col-md-4 col-sm-4 col-xs-5 shopping_cart pull-right">
                    <div class="header-text hidden-xs">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>	   Call Us: (+92)3340167330</p>
                    </div>
                    <!--cart-->
                    <div id="cart" class=" btn-group btn-shopping-cart">
                        <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                            <div class="shopcart">
                                <span class="handle pull-left"></span>
                                <span class="number-shopping-cart">0</span>
                                <span class="title">My Cart</span>
                                <p class="text-shopping-cart cart-total-full"> RS 0.00 </p>
                            </div>
                        </a>

                        <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                    @isset($cart)
                                    @foreach($cart as $item)
                                    <tr>
                                        <td class="text-center" style="width:70px">
                                            <a href="{{route('product')}}"> <img src="{{asset('user/img/demo/cms/image2.jpg')}}" style="width:70px" alt="Kohati SMile" title="Kohati Smile" class="preview"> </a>
                                        </td>
                                        <td class="text-left"> <a class="cart_product_name" href="{{route('product')}}">{{$item->name}}</a> </td>
                                        <td class="text-center"> x1 </td>
                                        <td class="text-center"> RS 2500.00 </td>
                                        <td class="text-right">
                                            <a href="{{route('product')}}" class="fa fa-edit"></a>
                                        </td>
                                        <td class="text-right">
                                            <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <div>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="text-left"><strong>Sub-Total</strong>
                                            </td>
                                            <td class="text-right">RS 5500.00</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <p class="text-right"> <a class="btn view-cart" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{route('checkout')}}"><i class="fa fa-share"></i>Checkout</a> </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--//cart-->
                </div>
            </div>

        </div>
    </div>
    <!-- //Header center -->

    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">


                <!-- Main menu -->
                <div class="megamenu-hori header-bottom-right  col-md-12 col-sm-12 col-xs-12 ">
                    <div class="responsive so-megamenu ">
                        <nav class="navbar-default">
                            <div class=" container-megamenu  horizontal">

                                <div class="navbar-header">
                                    <button   id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container">
                                            <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                <li class="home hover">

                                                    <p class="close-menu"></p>
                                                    <a href="{{route('home2')}}" class="clearfix menu1">
                                                        <strong>Home</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>

                                                <li class="with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('category')}}" class="clearfix menu1">
                                                        <strong>Categories</strong>
                                                        <span class="label"></span>

                                                    </a>
                                                    <div class="sub-menu" style="width: 100%; right: 0px; display: none;">
                                                        <div class="content" style="height: 398px; display: none;">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-md-3 img img1">
                                                                            <a href="#"><img src="{{asset('user/img/demo/cms/image1.jpg')}}" alt="banner1"></a>
                                                                        </div>
                                                                        <div class="col-md-3 img img2">
                                                                            <a href="#"><img src="{{asset('user/img/demo/cms/image2.jpg')}}" alt="banner2"></a>
                                                                        </div>
                                                                        <div class="col-md-3 img img3">
                                                                            <a href="#"><img src="{{asset('user/img/demo/cms/image3.jpg')}}" alt="banner3"></a>
                                                                        </div>
                                                                        <div class="col-md-3 img img4">
                                                                            <a href="#"><img src="{{asset('user/img/demo/cms/i5.png')}}" alt="banner4"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Kheri</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>
                                                                                    <li><a href="#" class="main-menu">Single Sole</a></li>
                                                                                    <li><a href="#" class="main-menu">Double Sole</a></li>

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Kohati Smile</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Kohati Soft</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <a href="#" class="title-submenu">Sawana/Sawas</a>
                                                                    <div class="row">
                                                                        <div class="col-md-12 hover-menu">
                                                                            <div class="menu">
                                                                                <ul>

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <!--			<li class="with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix menu1">
                                                                    <strong>Accessories</strong>


                                                                </a>
                                                                <div class="sub-menu" style="width: 100%; display: none;">
                                                                    <div class="content" style="display: none;">
                                                                        <div class="row">
                                                                            <div class="col-md-8">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Automotive</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Car Alarms and Security</a></li>
                                                                                                        <li><a href="#">Car Audio &amp; Speakers</a></li>
                                                                                                        <li><a href="3#">Gadgets &amp; Auto Parts</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Smartphone &amp; Tablets</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Accessories for i Pad</a></li>
                                                                                                        <li><a href="#">Apparel</a></li>
                                                                                                        <li><a href="#">Accessories for iPhone</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Sports &amp; Outdoors</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Camping &amp; Hiking</a></li>
                                                                                                        <li><a href="#">Cameras &amp; Photo</a></li>
                                                                                                        <li><a href="#">Cables &amp; Connectors</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Battereries &amp; Chargers</a></li>
                                                                                                        <li><a href="#">Bath &amp; Body</a></li>
                                                                                                        <li><a href="#">Outdoor &amp; Traveling</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <span class="title-submenu">Bestseller</span>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 list-product">
                                                                                        <div class="product-thumb">
                                                                                            <div class="image pull-left">
                                                                                                <a href="#"><img src="img/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
                                                                                            </div>
                                                                                            <div class="caption">
                                                                                                <h4><a href="#">Filet Mign</a></h4>
                                                                                                <div class="rating-box">
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                </div>
                                                                                                <p class="price">$1,202.00</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 list-product">
                                                                                        <div class="product-thumb">
                                                                                            <div class="image pull-left">
                                                                                                <a href="#"><img src="img/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
                                                                                            </div>
                                                                                            <div class="caption">
                                                                                                <h4><a href="#">Dail Lulpa</a></h4>
                                                                                                <div class="rating-box">
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class=""><i class="fa fa-star "></i></span>
                                                                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                                                                </div>
                                                                                                <p class="price">$78.00</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 list-product">
                                                                                        <div class="product-thumb">
                                                                                            <div class="image pull-left">
                                                                                                <a href="#"><img src="img/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
                                                                                            </div>
                                                                                            <div class="caption">
                                                                                                <h4><a href="#">Canon EOS 5D</a></h4>

                                                                                                <div class="rating-box">
                                                                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                                                                </div>
                                                                                                <p class="price">
                                                                                                    <span class="price-new">$60.00</span>
                                                                                                    <span class="price-old">$145.00</span>

                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>  -->
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('about-us')}}" class="clearfix menu1">
                                                        <strong>About</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('contact')}}" class="clearfix menu1">
                                                        <strong>Contact Us</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- //end Main menu -->

            </div>
        </div>

    </div>

    <!-- Navbar switcher -->
    <!-- //end Navbar switcher -->

</header>
