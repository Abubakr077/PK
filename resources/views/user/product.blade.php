@extends('layouts.layout')

@section('content')
    <ul class="header-main type-1">
        <li class="home"><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <li class="home"><a href="#">Categories<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <li><a href="#">Product</a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content " class="col-md-12 col-sm-12 type-1">

            <div class="product-view row">
                <div class="left-content-product col-lg-9 col-xs-12">
                    <form method="POST" action="/addtocart">
                        @csrf
                        <div class="row">
                        <div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 ">
                            <div class="large-image  ">
                                <img itemprop="image" class="product-image-zoom" src="{{asset($product->getPicture())}}" data-zoom-image="{{asset($product->getPicture())}}" title="{{$product->name}}" alt="{{$product->name}}" width="auto" height="auto">
                            </div>
                            <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider owl-carousel " data-nav='yes' data-loop="yes" data-margin="10" data-items_xs="2" data-items_sm="3" data-items_md="4" >
                                <a data-index="0" class="img thumbnail " data-image="img/demo/cms/image3.jpg')}}'" title="Kohati Soft">
                                    <img src="{{asset('user/img/demo/cms/image3.jpg')}}" title="Deep Black Kheri" alt="Deep Black Kheri">
                                </a>
                                <a data-index="1" class="img thumbnail " data-image="img/demo/cms/image2.jpg" title="Kohati Smile">
                                    <img src="{{asset('user/img/demo/cms/image2.jpg')}}'" title="Kohati Smile" alt="Kohati Smile" >
                                </a>
                                <a data-index="2" class="img thumbnail " data-image="img/demo/cms/i11.jpg')}}'" title="Kheri">
                                    <img src="{{asset('user/img/demo/cms/i11.jpg')}}" title="Kheri" alt="Kheri" width="auto" height="auto">
                                </a>
                                <a data-index="3" class="img thumbnail " data-image="img/demo/cms/i5.png" title="Sawana">
                                    <img src="{{asset('user/img/demo/cms/i5.png')}}'" width="auto" height="auto" title="Chocolate Brown Kheri" alt="Chocolate Brown Kheri" width="auto" height="auto">
                                </a>
                                <a data-index="3" class="img thumbnail " data-image="img/demo/cms/i4.png')}}'" title="">
                                    <img src="{{asset('user/img/demo/cms/i4.png')}}" title="Kohati Chappal" alt="Kohati Chappal" width="auto" height="auto">
                                </a>
                            </div>

                        </div>

                        <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{$product->name}}</h1>
                            </div>
                            <!-- Review -->
                            <div class="box-review form-group">
                                <div class="ratings">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star gray"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="product-box-desc">
                                <ul>
                                    <li>{{$product->description}}</li>
                                </ul>
                            </div>
                            <div class="product-label form-group">
                                <div class="stock">
                                    <span>Availability:</span>
                                    @if($product->availability === 1)
                                        <span class="instock">In Stock</span>
                                        @else
                                        <span class="outstock">Out Of Stock</span>
                                        @endif

                                    <p></p>
                                </div>
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">RS {{$product->price}}</span>
{{--                                    <span class="price-old" itemprop="price">RS 3000.00</span>--}}
                                </div>
                            </div>
                            <div id="product">
                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Qty:  </label>
                                            <input class="form-control" type="text" name="quantity" value="{{$product->quantity}}">
                                            <input type="hidden" name="product_id" value="50">
                                            <span class="input-group-addon product_quantity_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                            <span class="input-group-addon product_quantity_up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>

                                        </div>
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Size:  </label>
                                            <input class="form-control" type="text" name="Size" value="{{$product->size}}">
                                            <input type="hidden" name="product_id" value="12">
                                            <span class="input-group-addon product_quantity_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                            <span class="input-group-addon product_quantity_up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>

                                        </div>

                                    </div>
                                    <div class="info-product-right">
                                        <div class="cart">
                                                <button type="submit" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..."
                                                        id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart" >Add to Cart</button>
                                        </div>
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank list-inline">
                                                <li class="wishlist">
                                                    <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <!-- end box info product -->
                            <div class="share">
                                <p>Share This:</p>
                                <div class="share-icon">
                                    <ul>
                                        <li class="facebook"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                        <li class="google"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="instagram"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
    </form>
                    <div class="row">
                        <div class="col-sx-12">
                            <div class="producttab ">
                                <div class="tabsslider  col-xs-12">
                                    <ul class="nav nav-tabs">

                                        <li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Reviews </a></li>


                                    </ul>
                                    <div class="tab-content col-xs-12">

                                        <div id="tab-review" class="tab-pane fade  in">
                                            <form>
                                                <div id="review">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Administrator</strong></td>
                                                            <td class="text-right">29/07/2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Best product and best service</p>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star gray"></i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="text-right"></div>
                                                </div>
                                                <h2 id="review-title">Write a review</h2>
                                                <div class="contacts-form">
                                                    <div class="form-group"> <span class="icon icon-user"></span>
                                                        <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value === '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                    </div>
                                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                        <textarea class="form-control" name="text" onblur="if (this.value === '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                    </div>


                                                    <div class="form-group">
                                                        <b>Rating</b> <span>Bad</span>&nbsp;
                                                        <input type="radio" name="rating" value="1"> &nbsp;
                                                        <input type="radio" name="rating" value="2"> &nbsp;
                                                        <input type="radio" name="rating" value="3"> &nbsp;
                                                        <input type="radio" name="rating" value="4"> &nbsp;
                                                        <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                                    </div>
                                                    <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab-4" class="tab-pane fade">
                                            <a href="#">Monitor</a>,
                                            <a href="#">Apple</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="col-lg-3 hidden-sm hidden-md hidden-xs slider-products">
                    <div class="module latest-product titleLine">
                        <h3 class="modtitle">Latest Product</h3>
                        <hr>
                        <hr>
                        <hr>
                        <div class="modcontent ">
                            <div class="product-latest-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i11.jpg')}}" alt="Kheri" title="Kheri" class="img-responsive" width="auto" height="auto"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="caption">
                                            <h4><a href="{{route('product')}}">Brown Kheri</a></h4>

                                            <div class="price">
                                                <span class="price-new">RS 3500.00</span>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="product-latest-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/image2.jpg')}}" alt="Kohati" title="Kohati" class="img-responsive" width="auto" height="auto"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="caption">
                                            <h4><a href="{{route('product')}}">Kohati Smile</a></h4>

                                            <div class="price">
                                                <span class="price-new">RS 2500.00</span>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class="gray"><i class="fa fa-star "></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="product-latest-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/image3.jpg')}}" alt="Kohati" title="kohati" class="img-responsive" width="auto" height="auto"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="caption">
                                            <h4><a href="{{route('product')}}">Black Kheri</a></h4>

                                            <div class="price">
                                                <span class="price-new">RS 3000.00</span>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class="gray"><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="product-latest-item">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{route('product')}}"><img src="{{asset('user/img/demo/cms/i4.png')}}" alt="brown" title="brown kheri" class="img-responsive" width="auto" height="auto"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="caption">
                                            <h4><a href="{{route('product')}}">Brown Kheri Sandals</a></h4>

                                            <div class="price">
                                                <span class="price-new">RS 1500</span>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class=""><i class="fa fa-star "></i></span>
                                                    <span class="gray"><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>





                        </div>

                    </div>

                </section>
            </div>
            <!-- Related Products -->


            <!-- end Related  Products-->


        </div>


    </div>
@endsection
