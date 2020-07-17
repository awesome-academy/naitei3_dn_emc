<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate_number = Config::get('app._PAGINATION');
        $orders = Order::select('id','user_id', 'updated_at','status', 'ship_address')->paginate($paginate_number);
        $order = $orders->load('User');
        return view('admin.orders.index', compact('orders','order'));
    }

    public function updateQuantity($items)
    {
        $arr_quantity = [];
        $arr_bought = [];
        $temp = 0;
        $temp_bought = 0;
        foreach($items as $item){
            $product = $item->product()->get()->first();
            if($product->quantity >= $item->quantity){
                $temp = $product->quantity - $item->quantity;
                $temp_bought = $product->bought + $item->quantity;
                array_push($arr_quantity, $temp);
                array_push($arr_bought,$temp_bought);
            }
            else{
                return false;
            }
        }
        //update quantiy in storage, repo
        for($i = 0; $i < $items->count(); $i++)
        {
            $product = $items[$i]->product()->get()->first();
            $product->quantity = $arr_quantity[$i];
            $product->bought = $arr_bought[$i];
            $product->save();
        }
        return true;
    }

    public function acceptOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $check = $this->updateQuantity($order->orderItems()->with('Product')->get());
        if($check){
            $order->status = 1;
            $order->save();
            return response()->json([
                "message" => "accept",
                "status" => 1,
            ], 200);
        }
        else{
            return response()->json([
                "message" => "failed"
            ], 200);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = $this->findOrder($id);
        return view('admin.orders.show', compact('order'));
    }

    public function findOrder($id)
    {
        return Order::findOrFail($id);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deniedOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = 2;
        $order->save();
        return response()->json([
            "message" => "denied",
            "status" => 2,
        ], 200);
    }
}
