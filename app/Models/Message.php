<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable=[
        'message',"user_uid"
    ];

    protected $gurded=array("id");

    public function user(){
        return  $this->belongsTo('App\Models\User','user_uid','uid');
    }

    public function hearts(){
        return $this->hasMany('App\Models\Heart');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
