<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    //
    protected $table = "tablet";
    public $timestamps = false;
    public function product(){
    	return $this->hasOne('App\Product','tablet_id','id');
    }
}
