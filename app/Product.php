<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    public $timestamps = false;

    public function laptop(){
    	return $this->belongsTo('App\Laptop','laptop_id','id');
    }
    public function tablet(){
    	return $this->belongsTo('App\Tablet','tablet_id','id');
    }
    public function phone(){
    	return $this->belongsTo('App\Phone','phone_id','id');
    }
    public function rating(){
        return $this->hasMany('App\Rating','product_id','id');
    }

    public function starAverage(){
        $sum = 0;
        $quantity = 0;
        foreach ($this->rating as $rating) {
            $sum += $rating->rating;
            $quantity += 1;
        }
        if($quantity == 0) return 0;
        else return number_format($sum/$quantity,1);
    }


}
