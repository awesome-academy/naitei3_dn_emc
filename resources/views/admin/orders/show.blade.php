@extends('admin.index')
@section('content')
<section class="wrapper">
    <div class="form-w3layouts">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('order.order_detail')}}</div>
            </div>
            @if (isset ($message) )
            <div class="col-sm-12">
                <div class="alert alert-success" role="alert">
                    <span class="badge badge-pill badge-success">{{ trans('user.success') }}</span> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @elseif ($errors->any())
                <div class="col-sm-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <span class="badge badge-pill badge-danger">{{ trans('user.error') }}</span> {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="panel-body panel panel-default">
                <div class="position-center">
                    <form action="" class="card-body card-block" method="GET">
                        @csrf
                        <div class="card mt-3 mb-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <h2 class="card-title">{{$order->user()->get()[0]->name}}</h2>
                                </div>
                                <div class="form-group">
                                    <h4 class="card-subtitle mt-2 mb-2 text-muted" id="txt-address">
                                        {{trans("order.address")}}{{": ".$order->ship_address}}
                                    </h4>
                                    <h4 class="card-subtitle mt-2 mb-2 text-muted" id="txt-phone">
                                        {{trans("order.phone")}}{{": "}}{{$order->user()->get()[0]->phone? $order->user()->get()[0]->phone : "n/a"}}
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3 mb-3">
                            <div class="card-header">
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
                        <a href="{{ route('manage_orders') }}" class="btn btn-primary">
                            <i class="fa fa-mail-reply"></i>{{ trans('order.back') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
