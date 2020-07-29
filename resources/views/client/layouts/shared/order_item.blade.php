<tr id="{{"order-item-".$item->id}}">
    <th>{{1}}</th>
    <td>
        <img class="mr-2" src="{{asset('client/images/m2.jpg')}}" width="40px"alt="">
        {{$item->product->name}}
    </td>
    <td>
        <input class="change-quantity" type="number" value="{{$item->quantity}}" name="quantity" id="item-quantity"
        pattern="[1-9]*" min="1" max="{{$item->product->quantity}}" onchange="changeQuantity({{$item}}, value)">
        max:{{$item->product->quantity}}
    </td>
    <td>
        <i>{{"$".$item->product->price}}</i>
    </td>
    <td>
        <a><i class="fa fa-trash fa-2x" aria-hidden="true" onclick="deleteItem({{$item->id}})"></i></a>
    </td>
</tr>
