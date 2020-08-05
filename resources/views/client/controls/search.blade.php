@extends('client.index')

@section('content')

<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
    @if (isset($parent_cate->name))
        <span>{{$parent_cate->name}}</span>{{isset($category)?" - ".$category->name : "" }}
    @else
        {{-- <span>{{ trans('product.price') }}</span>{{" ".$price_actual}} --}}
    @endif
</h3>
<div class="mb-3 mt-3">
    {{$products->links()}}
</div>
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
    <h3 class="heading-tittle text-center font-italic">{{trans('control.result-found')." (".$count.")"}}</h3>
    <div class="row">
        @each('client.products.product_item', $products, 'product')
    </div>
</div>
<div class="mb-3 mt-3 float-right">
    {{$products->links()}}
</div>

@endsection
