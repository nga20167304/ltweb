<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    //
    protected $table = "shipper";
    public $timestamps = false;


    public function bill(){
    	return $this->hasMany('App\Bill','shipper_id','id');
    }
}
