<div class="col-md-4 product-men mt-5">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item text-center">
            <img src="{{asset('client/images/m3.jpg')}}" alt="">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a href="{{route('product_detail', $product->id)}}" class="link-product-add-cart">{{trans('product.quick-view')}}</a>
                </div>
            </div>
            <span class="product-new-top">{{trans('product.new')}}</span>
        </div>
        <div class="item-info-product text-center border-top mt-4">
            <h4 class="pt-1">
                <a href="single.html">{{$product->name}}</a>
            </h4>
            <div class="info-product-price my-2">
                <span class="item_price">{{"$".$product->price."0"}}</span>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <input type="button" onclick="addTocart({{$product->id}})" name="add_to_cart" value="Add to cart" class="button btn add_to_cart" />
            </div>
        </div>
    </div>
</div>
