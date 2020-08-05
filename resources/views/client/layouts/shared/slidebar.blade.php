<!-- product right -->
<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
    <div class="side-bar p-sm-4 p-3">
        <div class="search-hotel border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{trans('product.search-here')}}</h3>
            <form action="{{route('search_product')}}" method="GET">
                @csrf
                <input type="search" placeholder="Product name or price..." name="search" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <!-- price -->
        <div class="range border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{trans('product.price')}}</h3>
            <div class="w3l-range">
                <ul>
                    {{-- cho nay su dung jquery post price ve server --}}
                    <li>
                        <a href="{{route('pro_accord_price', ['parameter' => 999])}}" class="price-product" >{{trans('sidebar.under_1000')}}</a>
                    </li>
                    <li>
                        <a href="{{route('pro_accord_price', ['parameter' => 1000])}}" class="price-product">{{trans('sidebar.approx_1000_5000')}}</a>
                    </li>
                    <li>
                        <a href="{{route('pro_accord_price', ['parameter' => 5000])}}" class="price-product">{{trans('sidebar.approx_5000_10000')}}</a>
                    </li>
                    <li>
                        <a href="{{route('pro_accord_price', ['parameter' => 10001])}}" class="price-product">{{trans('sidebar.over_10000')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //price -->
        <!-- discounts -->
        <div class="left-side border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{trans('product.discount')}}</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">20% or More</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">30% or More</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">50% or More</span>
                </li>
            </ul>
        </div>
        <!-- //discounts -->
        <!-- reviews -->
        <div class="customer-rev border-bottom left-side py-2">
            <h3 class="agileits-sear-head mb-3">{{trans('product.customer-review')}}</h3>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>5.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>4.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <span>3.5</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>3.0</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <span>2.5</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //reviews -->
        <!-- electronics -->
        @if (isset($parent_cate))
            <div class="left-side border-bottom py-2">
                <a href="{{route('pro_accord_cate', $parent_cate->id)}}">
                    <h3 class="agileits-sear-head mb-3">{{isset($parent_cate)? $parent_cate->name : ""}}</h3>
                </a>
                <ul>
                    @each('client.categories.category_item_slidebar', $parent_cate->children()->get(), 'children_cate')
                </ul>
            </div>
        @endif

        <!-- //electronics -->
        <!-- arrivals -->
        <div class="left-side border-bottom py-2">
            <h3 class="agileits-sear-head mb-3">{{trans('product.new-arrivals')}}</h3>
            <ul>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">Last 30 days</span>
                </li>
                <li>
                    <input type="checkbox" class="checked">
                    <span class="span">Last 90 days</span>
                </li>
            </ul>
        </div>
        <!-- //arrivals -->
        <!-- best seller -->
        <div class="f-grid py-2">
            <h3 class="agileits-sear-head mb-3">{{trans('product.best-seller')}}</h3>
            <div class="box-scroll">
                <div class="scroll">
                    @foreach (Helper::best_seller() as $bs)
                        <div class="row">
                            <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                <img src="{{asset('client/images/k1.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                <a href="">{{$bs->name."(".substr($bs->description, 0, 20).")"}}</a>
                                <a href="" class="price-mar mt-2">${{$bs->price}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- //best seller -->
    </div>
    <!-- //product right -->
</div>
