<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function rating(Request $request)
    {
        $rating = $this->check_rating($request->user_id, $request->product_id);
        $rating->rating_star = intval($request->score);
        $rating->save();
        $product = Product::find($request->product_id);
        $avr_score = Helper::avr_score($product);
        return response()->json([
            "message" => "success",
            "avr_score" => $avr_score,
        ], 200);
    }

    public function check_rating($user_id, $product_id)
    {
        $rating = Rating::where(['user_id' => $user_id, 'product_id' =>$product_id])->get()->first();
        if($rating === null){
            $user = User::find($user_id);
            $rating = $user->ratings()->create(['product_id' => $product_id, 'rating_star' => 0]);
            return $rating;
        }
        return $rating;
    }

}
