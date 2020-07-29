<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

class OrderController extends Controller
{
    public function orderItem(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $order = $this->getLastCart($user);
            $product_id = $request->product_id;
            $exist_item = OrderItem::where('product_id', $product_id)->where('order_id', $order->id)->count();
            if ($exist_item > 0) {
                return response()->json([
                    'message' => 'exist'
                ], 200);
            } else {
                $item = new OrderItem;
                $item->product_id = $product_id;
                $order->orderItems()->save($item);
            }
            return response()->json([
                'message' => 'success',
                'item' => $item->load('Product'),
            ], 200);
        } else return response()->json([
            'message' => 'failed',
        ], 200);
    }

    public function getLastCart($user)
    {
        $order = $user->orders->last();
        if ($order === null || $order->status !== 3) { //check cart da ton tai va da thanh toan chua (status == 3 )
            $order = new Order;
            $order->status = 3;
            $order->ship_address = $user->address ? $user->address : "n/a";
            $user->orders()->save($order);
        }
        return $order;
    }

    public function updateQuantity(Request $request)
    {
        $item = OrderItem::find($request->item_id);
        $item->quantity = intval($request->quantity);
        $item->save();
        return response()->json([
            'message' => 'update success',
            'item' => $item,
        ], 200);
    }

    public function deleteItem(Request $request){
        $item = OrderItem::find($request->item_id);
        $item->delete();
        return response()->json([
            'message' => 'delete success',
        ], 202);
    }

    public function checkout(Order $order){
        $order_detail = $order->load('User');
        return view("client.orders.checkout", compact('order_detail'));
    }

    public function update_ship_address(Request $request){
        if($request->phone === 'n/a' || $request->phone === null || $request->address === 'n/a' || $request->address === null){
            return response()->json([
                'message' => 'failed',
            ], 200);
        }
        else{
            $user = User::find($request->user_id);
            $order = Order::find($request->order_id);
            $user->phone = $request->phone;
            $user->save();
            $order->ship_address = $request->address;
            $order->save();
            return response()->json([
                'message' =>  'success',
                'user' => $user,
                'order' => $order,
            ], 200);
        }
    }

}
