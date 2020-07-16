@extends('client.index')

@section('content')

<div>
    <!-- tittle heading -->

    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        <span>O</span>ur
        <span>N</span>ew
        <span>P</span>roducts</h3>

    <!-- //tittle heading -->

    <!-- first section -->
    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
        <h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>
        <div class="row">
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="{{asset('client/images/m2.jpg')}}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="single.html">OPPO A37f</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$230.00</span>
                            <del>$250.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="OPPO A37f" />
                                    <input type="hidden" name="amount" value="230.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="{{asset('client/images/m3.jpg')}}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="single.html">Apple iPhone X</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$280.00</span>
                            <del>$300.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Apple iPhone X" />
                                    <input type="hidden" name="amount" value="280.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //first section -->

    <!-- second section -->
    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
        <h3 class="heading-tittle text-center font-italic">Tv & Audio</h3>
        <div class="row">
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="{{asset('client/images/m4.jpg')}}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="single.html">Sony 80 cm (32 inches)</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$320.00</span>
                            <del>$340.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
                                    <input type="hidden" name="amount" value="320.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="{{asset('client/images/m6.jpg')}}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="single.html">Philips Speakers</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$249.00</span>
                            <del>$300.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Philips Speakers" />
                                    <input type="hidden" name="amount" value="249.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //second section -->

    <!-- third section -->
    <div class="product-sec1 product-sec2 px-sm-5 px-3">
        <div class="row">
            <h3 class="col-md-4 effect-bg">Summer Carnival</h3>
            <p class="w3l-nut-middle">Get Extra 10% Off</p>
            <div class="col-md-8 bg-right-nut">
                <img src="{{asset('client/images/image1.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- //third section -->

    <!-- fourth section -->
    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
        <h3 class="heading-tittle text-center font-italic">Large Appliances</h3>
        <div class="row">
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="{{asset('client/images/m7.jpg')}}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="single.html">Whirlpool 245</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$230.00</span>
                            <del>$280.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Whirlpool 245" />
                                    <input type="hidden" name="amount" value="230.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men mt-5">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item text-center">
                        <img src="{{asset('client/images/m8.jpg')}}" alt="">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                            <a href="single.html">BPL Washing Machine</a>
                        </h4>
                        <div class="info-product-price my-2">
                            <span class="item_price">$180.00</span>
                            <del>$200.00</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="BPL Washing Machine" />
                                    <input type="hidden" name="amount" value="180.00" />
                                    <input type="hidden" name="discount_amount" value="1.00" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="return" value=" " />
                                    <input type="hidden" name="cancel_return" value=" " />
                                    <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //fourth section -->

</div>

@endsection
