@extends('client.index')

@section('content')
    <div>
        <h1>{{trans('order.order_detail')}}</h1>
        <div class="card mt-3 mb-3">
            <div class="card-header bg-secondary">
                <h2 class="text-light">
                    {{trans("order.address")}}
                </h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$order->user()->get()[0]->name}}</h5>
                <h6 class="card-subtitle mt-2 mb-2 text-muted" id="txt-address">
                    {{trans("order.address")}}{{": ".$order->ship_address}}</h6>
                <h6 class="card-subtitle mt-2 mb-2 text-muted" id="txt-phone">
                    {{trans("order.phone")}}{{": "}}{{$order->user()->get()[0]->phone? $order->user()->get()[0]->phone : "n/a"}}
                </h6>
            </div>
        </div>

        <div class="card mt-3 mb-3">
            <div class="card-header bg-success">
                <h2 class="text-light">
                    {{trans("order.order")." (".Helper::item_count($order->orderItems()->get())." product(s))"}}
                </h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{{trans('order.product_name')}}</th>
                            <th scope="col">{{trans('order.price_per_unit')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems()->get()->load('Product') as $item)
                            <tr>
                                <td>
                                    <a href="{{route('product_detail', $item->product()->get()[0]->id)}}"><h5>{{$item->product()->get()[0]->name."\t x".$item->quantity}}</h5></a>
                                </td>
                                <td>
                                    <h5>{{"$".$item->product()->get()[0]->price}}</h5>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="card-footer text-muted">
                <h3 class="float-right mr-3 mt-2 mb-2">{{trans('order.total')}}{{": $".Helper::total($order)}}</h3>
            </div>
        </div>
        <a href="{{url()->previous()}}"><button class="btn btn-warning float-right mt-3 mb-3">{{(trans('order.back'))}}</button></a>
    </div>

@endsection
