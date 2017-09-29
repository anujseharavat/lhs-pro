<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSemesterMap extends Model
{
    public $timestamps = true;
//    public function user(){
//        return $this->belongsTo('App\User');
//    }
    public function semester(){
        return $this->belongsTo('App\Semester');
    }
    public function isActive(){
        return $this->status != '0';
    }
//    public static function activeSemester(){
//        return static::where('status','=', 'Started')->get()->first();
//    }
}
