<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLessonMap extends Model
{
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
    public function isActive()
    {
        return $this->status == '1';
    }

//    public function getMax($id)
//    {
//        $maxId = App\UserContentMap::->max('content_id');
//    }
}
