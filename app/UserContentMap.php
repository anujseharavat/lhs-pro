<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContentMap extends Model
{
    public function content(){
        return $this->belongsTo('App\Content');
    }
    public function statusName(){
        return $this->hasOne('App\Status', 'id', 'status');
    }
    public function isActive(){
        return $this->status == '1';
    }
}