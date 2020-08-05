<!-- header-bottom-->
<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center">
                    <a href="{{route('home')}}" class="font-weight-bold font-italic">
                        <img src="{{asset('client/images/logo2.png')}}" alt=" "
                            class="img-fluid">{{ trans('control.ElectroStore') }}
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->
                    <div class="col-10 agileits_search">
                        <form class="form-inline" action="{{route('search_product')}}" method="GET">
                            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Product name or price..." aria-label="Search"
                                required>
                            <button class="btn my-2 my-sm-0" type="submit">{{ trans('control.search') }}</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <button class="btn w3view-cart" data-toggle="modal" data-target="#modalCart">
                                <i class="fas fa-cart-arrow-down shopping-cart "></i>
                                <span id="cartNumber">
                                    {{Auth::check() && Helper::my_order() && Helper::my_order()-> status === 3 ? Helper::my_order()->orderItems()->count() : "0"}}
                                </span>
                            </button>
                        </div>
                    </div>
                    <!-- //cart details -->
                    <!-- Modal: modalCart -->
                    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-custom" id="modalContent">
                                <!--Header-->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">{{trans('order.your-cart')}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>{{trans('order.no')}}</th>
                                                <th>{{trans('order.product_name')}}</th>
                                                <th>{{trans('order.quantity')}}</th>
                                                <th>{{trans('order.price')}}</th>
                                                <th>{{trans('order.remove')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="my_order">
                                            @if (Auth::check() && Helper::my_order() && Helper::my_order()->status === 3 && Helper::my_order()->orderItems()->count() > 0)
                                                @each('client.layouts.shared.order_item', Helper::my_order()->orderItems()->get()->load('Product'), 'item')
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">{{trans('order.close')}}</button>
                                        @if (Helper::my_order() && Helper::my_order()-> status === 3)
                                            <a href="{{route('checkout', Helper::my_order()->id)}}"><button class="btn btn-primary">{{trans('order.checkout')}}</button></a>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal: modalCart -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //header-bottom -->
