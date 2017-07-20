<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    public function course(){
        return $this->belongsTo('App\Course');
    }
    public function subjects(){
        return $this->hasMany('App\Subject');
    }
    public function tests(){
        return $this->hasMany('App\Test');
    }
    public function exams(){
        return $this->hasMany('App\Exam');
    }
    public function userSemesterMaps(){
        return $this->hasMany('App\UserSemesterMap');
    }
}
