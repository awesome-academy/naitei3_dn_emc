@extends('client.index')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>{{trans('order.date-order')}}</th>
                <th>{{trans('order.status')}}</th>
                <th>{{trans('order.status')}}</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($list_order as $order)
                <tr>
                    <td>{{$order->updated_at}}</td>
                    <td class="{{Helper::text_status($order->status)}}">{{Helper::status($order->status)}}</td>
                    <td><a href="{{route('order_detail', $order->id)}}"><button type="button" class="btn btn-primary">{{trans('order.detail')}}</button></a></td>
                </tr>
            @endforeach


        </tbody>
    </table>

@endsection
