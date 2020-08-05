<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Comment;
use App\Models\CommentContent;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store_comment(Request $request)
    {
        $comment = $this->get_user_comment_product($request->user_id, $request->product_id)->first();
        $user = User::find($request->user_id);
        $comment_content = $comment->commentContents()->create(['content' => $request->comment_content]);
        return response()->json([
            "message" => "success",
            "user" => $user->name,
            "comment_content" => $comment_content->content,
            "timeline" => Helper::time_of_comment($comment_content->created_at),
        ], 200);
    }


    public function get_user_comment_product($user_id, $product_id)
    {
        $comment = Comment::where(['user_id' => $user_id, 'product_id' => $product_id])->with('User')->get();
        if ($comment->isEmpty()) {
            User::find($user_id)->comments()->create(['product_id' => $product_id]);
        }
        return $comment;
    }


    public function delete_comment(Request $request)
    {
        $comment_content  = CommentContent::find($request->comment_content_id);
        $check = $this->get_user_comment_authorize($request->user_id, $comment_content);
        if ($comment_content === null || !$check){
            return response()->json([
                "message" => "failed",
            ], 200);
        }
        else{
            $comment_content->delete();
            return response()->json([
                "message" => "success",
                "comment_content_id" => $comment_content->id,
            ], 200);
        }
    }

    public function update_comment(Request $request){
        $comment_content  = CommentContent::find($request->comment_content_id);
        $check = $this->get_user_comment_authorize($request->user_id, $comment_content);
        if ($comment_content === null || !$check){
            return response()->json([
                "message" => "failed",
            ], 200);
        }
        else{
            $comment_content->content = $request->content;
            $comment_content->save();
            return response()->json([
                "message" => "success",
                "comment_content" => $comment_content,
            ], 200);
        }
    }

    public function get_user_comment_authorize($user_id, $comment_content){
        $user = User::find($user_id);
        $comment = $user->comments()->find($comment_content->comment_id);
        if ($comment_content === null || $comment === null){
            return false;
        }
        else return true;
    }

}
