<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function semester(){
        return $this->belongsTo('App\Semester');
    }
    public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }
}
