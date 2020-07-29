@extends('client.index')

@section('content')

    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>{{ trans('product_detail.o') }}</span>{{ trans('product_detail.rder') }}
                <span>{{ trans('product_detail.n') }}</span>{{ trans('product_detail.ow') }}</h3>
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-md-6 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">

                            <div class="clearfix"></div>
                            <div class="flex-viewport">
                                <ul class="slides">
                                    <li data-thumb="images/si3.jpg" class="clone" aria-hidden="true">
                                        <div class="thumb-image">
                                            <img src="{{asset('client/images/si3.jpg')}}" data-imagezoom="true"
                                                class="img-fluid" alt="" draggable="false">
                                        </div>
                                    </li>
                                    <li data-thumb="{{asset('client/images/si1.jpg')}}" class="flex-active-slide"
                                        data-thumb-alt="">
                                        <div class="thumb-image">
                                            <img src="{{asset('client/images/si1.jpg')}}" data-imagezoom="true"
                                                class="img-fluid" alt="" draggable="false">
                                        </div>
                                    </li>
                                    <li data-thumb="{{asset('client/images/si2.jpg')}}" data-thumb-alt=""
                                        class="flex-active-slide">
                                        <div class="thumb-image">
                                            <img src="{{asset('client/images/si2.jpg')}}" data-imagezoom="true"
                                                class="img-fluid" alt="" draggable="false">
                                        </div>
                                    </li>
                                    <li data-thumb="{{asset('client/images/si3.jpg')}}" data-thumb-alt=""
                                        class="flex-active-slide" id="flex-active-slide-2">
                                        <div class="thumb-image">
                                            <img src="{{asset('client/images/si3.jpg')}}" data-imagezoom="true"
                                                class="img-fluid" alt="" draggable="false">
                                        </div>
                                    </li>
                                    <li data-thumb="{{asset('client/images/si1.jpg')}}" class="clone" id="clone-2"
                                        aria-hidden="true">
                                        <div class="thumb-image">
                                            <img src="{{asset('client/images/si1.jpg')}}" data-imagezoom="true"
                                                class="img-fluid" alt="" draggable="false">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ol class="flex-control-nav flex-control-thumbs">
                                <li><img src="{{asset('client/images/si1.jpg')}}" class="flex-active" draggable="false">
                                </li>
                                <li><img src="{{asset('client/images/si2.jpg')}}" draggable="false" class=""></li>
                                <li><img src="{{asset('client/images/si3.jpg')}}" draggable="false" class=""></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 single-right-left simpleCart_shelfItem">
                    <h3 class="mb-3">{{$product->name}}</h3>
                    <p class="mb-3">
                        <span class="item_price">{{"$".$product->price}}</span>
                        <label>{{ trans('product_detail.Free delivery') }}</label>
                    </p>
                    <div class="single-infoagile">
                        <ul>
                            <li class="mb-3">
                                {{ trans('product_detail.Cash on Delivery Eligible.') }}
                            </li>
                            <li class="mb-3">
                                {{ trans('product_detail.Shipping Speed to Delivery.') }}
                            </li>
                            <li class="mb-3">
                                {{ trans('product_detail.EMIs from $655/month.') }}
                            </li>
                            <li class="mb-3">
                                {{ trans('product_detail.Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardTC') }}
                            </li>
                            <li class="mb-3">
                                <h6 class="remaining">{{ trans('product_detail.Remaining:') }} </h6><b>{{$product->quantity}}</b>
                            </li>
                        </ul>
                    </div>
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            <label>{{ trans('product_detail.1 Year') }}</label>{{ trans('product_detail.Manufacturer Warranty') }}
                        </p>
                        <ul>
                            @foreach (explode('. ', $product->description) as $des)
                            <li class="mb-1">
                                {{$des}}
                            </li>
                            @endforeach
                        </ul>
                        <p class="my-sm-4 my-3">
                            <i
                                class="fas fa-retweet mr-3"></i>{{ trans('product_detail.Net banking Credit/ Debit/ ATM card') }}
                        </p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime">
                                    <input type="hidden" name="amount" value="200.00">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="button" name="add_to_cart" value="Add to cart"  onclick="addTocart({{$product->id}})" class="button add_to_cart">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
