<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function semester(){
        return $this->belongsTo('App\Semester');
    }
    public function lessons(){
        return $this->hasMany('App\Lesson');
    }
    public function tests(){
        return $this->hasMany('App\Test');
    }
    public function exams(){
        return $this->hasMany('App\Exam');
    }
}
