<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContentMap extends Model
{
//    protected $primaryKey = ['user_id', 'content_id'];
//    protected $primaryKey = 'content_id';
    protected $primaryKey = null;
    public $incrementing = false;
    public function content(){
        return $this->belongsTo('App\Content');
    }
    public function statusName(){
        return $this->hasOne('App\Status', 'id', 'status');
    }
    public function isActive(){
        return true;//$this->status != '1';
    }
}
