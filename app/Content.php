<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }
    public function contentType(){
        return $this->hasOne('App\ContentType', 'id', 'type');
    }
    public function isActive($activeContent){
        return $activeContent && ($this->id == $activeContent->content_id);
    }
}
