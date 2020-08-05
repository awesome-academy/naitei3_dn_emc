<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Config;
use Auth;

class Helper
{

    public static function main_categories(){
        $main_categories = Category::whereNull('parent_id')->get();
        return $main_categories;
    }

    public function randomCategory(){
        $random_cate = $this->main_categories()[rand(0, 2)];
        return $random_cate;
    }

    public static function best_seller(){
        $best_seller = Product::orderBy('bought', 'desc')->offset(Config::get('app._OFFSET'))->limit(Config::get('app._LIMIT'))->get();
        return $best_seller;
    }

    public static function my_order(){
        if(Auth::check() && Auth::user()->orders()){
            $order = Auth::user()->orders()->get()->last();
            return $order;
        }
    }

    public static function item_count($items){
        $count = 0;
        foreach($items as $item){
            $count += $item->quantity;
        }
        return $count;
    }

    public static function total($order){
        $total = 0;
        foreach($order->orderItems()->get() as $item){
            $total += $item->product()->get()[0]->price * $item->quantity;
        }
        return $total;
    }

    public static function status($status){
        switch($status){
            case 0:
                return "Pending";
            case 1:
                return "Accept";
            case 2:
                return "Decline";
            default:
                return "Exception";
        }
    }

    public static function text_status($status){
        switch($status){
            case 0:
                return "text-primary";
            case 1:
                return "text-success";
            case 2:
                return "text-danger";
            default:
                return "Exception";
        }
    }

    public static function sort_comment($comments){
        $collection_comment = collect();
        foreach($comments as $c){
            foreach($c->commentContents()->with('Comment')->get() as $ct){
                $collection_comment->push($ct);
            }
        }
        $collection_comment = $collection_comment->sortByDesc('created_at');
        return $collection_comment;
    }

    public static function time_of_comment($created_at){
        $time = $created_at->diff(now());
        if($time->y > 0){
            return $time->y." year(s) ago";
        }
        if($time->m > 0){
            return $time->m." month(s) ago";
        }
        if($time->d > 0){
            return $time->d." day(s) ago";
        }
        if($time->h > 0){
            return $time->h." hour(s) ago";
        }
        if($time->i > 0){
            return $time->i." minute(s) ago";
        }
        if($time->s >= 0){
            return $time->s." second(s) ago";
        }
    }

    public static function avr_score(Product $product){
        $count = $product->ratings()->count();
        if($count > 0){
            $avr = 0;
            foreach($product->ratings()->get() as $r){
                $avr += $r->rating_star;
            }
            return intval($avr/$count);
        }
        return 0;
    }
}
