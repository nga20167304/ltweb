<?php 
namespace App;

use App\Product;

class Cart{
	public $items = array();

	public function addItem($id){
		if(array_key_exists($id,$this->items)){
			$this->items[$id]["quantity"] += 1 ; 
		}else{
			$product = Product::find($id);
			$this->items[$id]["product"] = $product;
			$this->items[$id]["quantity"] = 1 ;
		}

	}

	public function increQty($id){
		$this->items[$id]["quantity"] +=1; 
	}

	public function decreQty($id){
		if ($this->items[$id]["quantity"]>1) {
			$this->items[$id]["quantity"] -=1;
		}
	}

	public function deleteItem($id){
		unset($this->items[$id]);
	}

	public function totalPrice(){
		$totalPrice = 0;
		foreach ($this->items as $item) {
			$totalPrice += $item["product"]->price * (100-$item["product"]->discount) / 100 * $item["quantity"];
		}
		$totalPrice = (int)($totalPrice / 1000) * 1000;
		return $totalPrice;
	}
	public function totalQty(){
		$totalQty = 0;
		foreach ($this->items as $item) {
			$totalQty += $item["quantity"];
		}
		return $totalQty;
	}
}
?> 