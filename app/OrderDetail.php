<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id', 'course_id', 'qty', 'price'
    ];
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
