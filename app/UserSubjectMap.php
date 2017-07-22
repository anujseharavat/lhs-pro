<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubjectMap extends Model
{
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function isActive($id){
        return $this->find($id)->status == 'Started';
    }
//    public static function activeSubject(){
//        return static::where('status','=', 'Started')->get()->first();
//    }
}
