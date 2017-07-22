<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTestMap extends Model
{
    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }
    public function isActive(){
        return $this->status == 'Started';
    }

}
