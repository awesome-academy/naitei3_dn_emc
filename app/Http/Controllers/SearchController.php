<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SearchController extends Controller
{
    public function search_product(Request $request){
        $products = Product::where('name', 'like', '%'.$request->search.'%')->orWhere('price', 'like', '%'.$request->search.'%');
        $count = $products->count();
        $products = $products->paginate(Config::get('app._PAGINATION'));
        $products->appends($request->only('search'));
        return view('client.controls.search', compact('products', 'count'));
    }
}
