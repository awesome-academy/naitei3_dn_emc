<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }

    public function product(){
        $this->belongsTo(Product::class);
    }

    public function commentContents(){
        $this->hasMany(CommentContent::class);
    }
}
