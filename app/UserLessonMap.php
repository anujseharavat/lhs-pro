<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLessonMap extends Model
{
    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }
    public static function activeLesson(){
        return static::where('status','=', 'Started')->get();
    }
}
