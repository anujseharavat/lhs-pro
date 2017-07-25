<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    public function content(){
        return $this->belongsTo('App\Content');
    }
}
