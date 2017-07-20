<?php

namespace  App;

class Cart{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;
//    public $orderDate;
    public function __construct($oldCart) {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
//            $this->orderDate = $oldCart->orderDate;
        }
    }
    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item ];
        if ($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
//        $this->orderDate = date('Y-m-d H:i:s');
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
    public function remove($id){
        if ($this->items){
            if(array_key_exists($id, $this->items)){
                $this->totalQty -= $this->items[$id]['qty'];
                $this->totalPrice -= $this->items[$id]['price'];
                array_forget($this->items, $id);
            }
        }
    }
}