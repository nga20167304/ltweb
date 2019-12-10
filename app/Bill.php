<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = "bill";
    public $timestamps = false;

    public function customer(){
    	return $this->belongsTo('App\Customer','customer_id','id');
    }
    public function shipper(){
    	return $this->belongsTo('App\Shipper','shipper_id','id');
    }
    public function order(){
    	return $this->hasMany('App\Order','bill_id','id');
    }
}
