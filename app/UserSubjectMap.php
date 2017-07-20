<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubjectMap extends Model
{
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public static function activeSubject(){
        return static::where('status','=', 'Started')->get();
    }
}
