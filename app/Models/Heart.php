<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
    use HasFactory;

    protected $fillable=[
        "user_uid","message_id"
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function message(){
        return $this->belongsTo('App\Models\Message');
    }


}
