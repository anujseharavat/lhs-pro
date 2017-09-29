<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
//    protected $table = 'courses';
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'class_name', 'desc','addons', 'duration', 'price'];

    public function semesters(){
        return $this->hasMany('App\Semester');
    }
//    public function orderDetails(){
//        return $this->belongsTo('App\OrderDetails', 'course_id', 'id');
//    }
}
