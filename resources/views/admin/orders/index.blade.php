@extends('admin.index')

@section('content')
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('order.list_order') }}</div>
            <div class="row w3-res-tb">
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">{{ trans('order.search') }}</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                        <tr>
                            <th>{{ trans('order.detail') }}</th>
                            <th>{{ trans('order.user') }}</th>
                            <th>{{ trans('order.order_date') }}</th>
                            <th>{{ trans('order.status') }}</th>
                            <th>{{ trans('order.action') }}</th>
                        </tr>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        <div class="col-sm-1 form-group">
                                            <a href="{{ route('show_orders', $order->id) }}" class="active" >
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{$order->user()->get()[0]->name}}</td>
                                    <td>{{$order->updated_at}}</td>
                                    <td class="{{Helper::text_status($order->status)}}" id="status-cart">{{Helper::status($order->status)}}</td>
                                    <td>
                                        @if ($order->status == 0)
                                        <div class="form-group" id="blocked">
                                            <div class="col-sm-2">
                                                <a href="" id="accept-order-admin" class="active" onclick="acceptOrder({{$order->id}})">
                                                    <i class="fa fa-check text-success text"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="" id="denied-order-admin" class="active" onclick="deniedOrder({{$order->id}})">
                                                    <i class="fa fa-times text-danger text"></i>
                                                </a>
                                            </div>
                                        </div>
                                        @else
                                            <p>{{ trans('order.blocked') }}</p>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        <div class="mb-3 mt-3 float-right">
            {{$orders->links()}}
        </div>
    </div>
</section>
@endsection
