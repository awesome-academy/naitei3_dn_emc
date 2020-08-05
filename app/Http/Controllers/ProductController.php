<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{

    public function product_accord_category(Category $category){
        $paginate_number = Config::get('app._PAGINATION');
        if($category->children()->count() > 0){
            $ids_subcate = $category->children()->pluck('id')->toArray(); // kangaeru
            $product_ids = DB::table('categories_products')->whereIn('category_id', $ids_subcate)->pluck('product_id');
            $products = Product::whereIn('id', $product_ids)->paginate($paginate_number);
            $parent_cate = $category;
            return view('client.products.product_accord_category', compact('parent_cate', 'products'));
        }
        else
        {
            $products = $category->products()->paginate($paginate_number);
            $parent_cate = Category::find($category->parent_id);
            return view('client.products.product_accord_category', compact('category', 'parent_cate', 'products'));
        }
    }

    public function product_accord_price(Request $request){
        $products = null;
        $price_actual = null;
        $paginate_number = Config::get('app._PAGINATION');
        $price = intval($request->parameter);
        if($price < 1000){
            $products = Product::where('price', '<', 1000);
            $price_actual = 'Under $1000';
        }
        elseif($price >= 1000 && $price < 5000){
            $products = Product::where('price', '>=', 1000)->where('price', '<', 5000);
            $price_actual = '$1000 - $5000';
        }
        elseif($price >= 5000 && $price < 10000){
            $products = Product::where('price', '>=', 5000)->where('price', '<', 10000);
            $price_actual = '$5000 - $10000';
        }
        else
        {
            $products = Product::where('price', '>=', 10000);
            $price_actual = 'Over $10000';
        }
        $products = $products->paginate($paginate_number);

        return view('client.products.product_accord_category', compact('products', 'price_actual'));
    }

    public function show(Product $product){
        $comments = $product->comments()->with('User')->get();
        $collection_comment = Helper::sort_comment($comments);
        $rating_score = Helper::avr_score($product);
        return view('client.products.product_details', compact('product', 'collection_comment', 'rating_score'));
    }

}
