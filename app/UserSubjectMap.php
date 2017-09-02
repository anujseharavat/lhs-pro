<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubjectMap extends Model
{
    public function subject(){
        return $this->hasOne('App\Subject', 'id', 'subject_id');
    }
    public function isActive(){
        return $this->status == '1';
    }
    public function statusName(){
        return $this->hasOne('App\Status', 'id', 'status');
    }
//    public static function activeSubject(){
//        return static::where('status','=', 'Started')->get()->first();
//    }
}
