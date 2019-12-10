<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    public $timestamps = false;
    public function bill(){
    	return $this->belongsTo('App\Bill','bill_id','id');
    }
    public function product(){
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
