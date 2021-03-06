<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chatbox extends Model
{
    public function sender(){
        return $this->belongsTo(User::class);
    }

    public function receiver(){
        return $this->belongsTo(User::class);
    }

    public function message(){
        return $this->belongsTo(Message::class);
    }
}
