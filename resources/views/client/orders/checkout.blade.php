@extends('client.index')

@section('content')

    <h2 class="mb-3 mt-3">{{trans("order.info")}}</h2>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h5 class="card-title">{{$order_detail->user()->get()[0]->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted" id="txt-address">{{trans("order.address")}}{{": ".$order_detail->ship_address}}</h6>
            <h6 class="card-subtitle mb-2 text-muted" id="txt-phone">{{trans("order.phone")}}{{": "}}{{$order_detail->user()->get()[0]->phone? $order_detail->user()->get()[0]->phone : "n/a"}}</h6>
            <button class="btn btn-warning" onclick="toogle_form_address()">{{trans("order.edit")}}</button>
        </div>
        <hr>
        <a href="{{route('finish_order', $order_detail->id)}}"><button class="btn btn-success mb-2 mr-3 order-confirm">{{trans("order.next")}}</button></a>
    </div>

    <div class="card mb-3 mt-3" id="ship-address">
        <div class="card-header">
            {{trans("order.edit_ship_address")}}
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <label class="col-form-label">{{trans("order.address")}}</label>
                <input id="address" type="text" class="form-control" value="{{$order_detail->ship_address}}" name="address" required>
                <label class="col-form-label">{{trans("order.phone")}}</label>
                <input id="phone" type="text" class="form-control" name="phone" value="{{$order_detail->user()->get()[0]->phone? $order_detail->user()->get()[0]->phone : "n/a"}}" required>
                <button class="btn btn-success mt-2 mr-3" id="checkout-btn" type="submit" onclick="update_ship_address({{$order_detail}})">{{trans("order.save")}}</button>
                <input type="button" class="btn btn-danger mt-2 mr-3" onclick="toogle_form_address()" value="{{trans("order.cancel")}}"/>
            </form>
        </div>
    </div>

@endsection
