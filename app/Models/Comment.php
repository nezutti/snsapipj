<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        "user_uid","comment","message_id"
    ];


    
    public function user(){
        return $this->belongsTo('App\Models\User','user_uid','uid');
    }

    public function message(){
        return $this->belongsTo('App\Models\Message');
    }
}
