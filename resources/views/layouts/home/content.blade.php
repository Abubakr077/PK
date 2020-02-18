<div class="row">
    <aside class="col-md-3 col-sm-4 col-xs-12  content-aside left_column">
        <div class="special">
            <h3 class="modtitle">Sale Offers</h3>
            <hr><hr><hr>
            <div class="owl-carousel owl-special" data-margin="0" data-loop="yes" data-nav="yes" data-dots="no" data-items_xs="1" data-items_sm="1" data-items_md="1">
                <div class="product-layout">
                    <div class="product-item-container">
                        <div class="left-block">
                            <div class="product-image-container  second_img ">
                                <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/image3.jpg')}}" alt=""></a>

                                <!--Sale Label-->
                                <span class="sale">-11%</span>
                            </div>
                            <div class="hover">
                                <ul>
                                    <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a><div class="tooltip fade top" role="tooltip" id="tooltip816167" style="top: -79px; left: 0px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">Add to Wish List</div></div></li>

                                </ul>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="time-sale">
                                <p class="time-day">20 days</p>
                                <p class="time-hour">11  :  25  :  53</p>
                            </div>
                            <div class="caption">
                                <h4><a href="{{route('product')}}">Product #01</a></h4>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class="gray"><i class="fa fa-star "></i></span>
                                    </div>
                                </div>

                                <div class="price">
                                    <span class="price-new">RS 2500</span>
                                    <span class="price-old">RS 2800</span>
                                </div>
                            </div>

                            <div class="button-group">
                                <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                            </div>
                        </div><!-- right block -->
                    </div>
                </div>
                <div class="product-layout">
                    <div class="product-item-container">
                        <div class="left-block">
                            <div class="product-image-container  second_img ">
                                <a href="{{route('product')}}" class="product-img"><img src="{{asset('user/img/demo/cms/i4.png')}}" alt=""></a>
                                <!--Sale Label-->
                                <span class="sale">-11%</span>
                            </div>
                            <div class="hover">
                                <ul>
                                    <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a><div class="tooltip fade top" role="tooltip" id="tooltip8161" style="top: -79px; left: 0px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">Add to Wish List</div></div></li>

                                </ul>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="time-sale">
                                <p class="time-day">20 days</p>
                                <p class="time-hour">11  :  25  :  53</p>
                            </div>
                            <div class="caption">
                                <h4><a href="{{route('product')}}">Product #02</a></h4>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class=""><i class="fa fa-star "></i></span>
                                        <span class="gray"><i class="fa fa-star "></i></span>
                                    </div>
                                </div>

                                <div class="price">
                                    <span class="price-new">RS 1700</span>
                                    <span class="price-old">RS 1900</span>
                                </div>
                            </div>

                            <div class="button-group">
                                <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                            </div>
                        </div><!-- right block -->
                    </div>
                </div>
            </div>


        </div>
    </aside>
    <div id="content" class="col-md-9 col-sm-8  col-xs-12">
        <div class="digital">
            <div class="row">
                <div class=" col-sm-12">
                    <h3 class="modtitle">New Arrival</h3>
                    <hr>
                    <hr>
                    <hr>
                    <div class="digital-owl">
                        <div class=" owl-carousel digital-owl " data-dots="no" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="2" data-items_md="4" data-margin="20">

                            @foreach($products as $item)
                                <div class="product-layout">
                                    <div class="product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container  second_img ">
                                                <a href="{{ url("product/$item->id") }}"
                                                   class="product-img"><img src="{{url($item->getPicture())}}" alt=""></a>
                                                <span class="new">New</span>
                                                <div class="hover">
                                                    <ul>
                                                        <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="{{route('product')}}">{{$item->name}}</a></h4>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class="gray"><i class="fa fa-star "></i></span>
                                                    </div>
                                                </div>

                                                <div class="price">
                                                    <span class="price-new">{{$item->price}}</span>

                                                </div>

                                            </div>

                                            <div class="button-group">
                                                <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
