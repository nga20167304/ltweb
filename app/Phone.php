<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $table = "phone";
    public $timestamps = false;

    public function product(){
    	return $this->hasOne('App\Product','phone_id','id');
    }
}
