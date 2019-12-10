<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    //
    protected $table = "laptop";
    public $timestamps = false;

    public function product(){
    	return $this->hasOne('App\Product','laptop_id','id');
    }
}
