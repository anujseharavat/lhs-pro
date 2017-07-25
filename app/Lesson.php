<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function contents(){
        return $this->hasMany('App\Content');
    }
    public function tests(){
        return $this->hasMany('App\Test');
    }
    public function exams(){
        return $this->hasMany('App\Exam');
    }
    public function isActive($activeLesson){
        return $activeLesson && ($this->id == $activeLesson->lesson_id);
    }
}
