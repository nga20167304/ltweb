<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = "customer";
    public $timestamps = false;

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function bill(){
    	return $this->hasMany('App\Bill','customer_id','id');
    }
    
}
