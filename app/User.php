<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'country', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function userSemesterMaps(){
        return $this->hasMany('App\UserSemesterMap');
    }
    public function activeSemester(){
        return $this->userSemesterMaps()->where('status','=', 1)->get()->first();
    }

    public function userSubjectMaps(){
        return $this->hasMany('App\UserSubjectMap');
    }
    public function activeSubject(){
        return $this->userSubjectMaps()->where('status','=', 1)->get()->first();
    }

    public function userLessonMaps(){
        return $this->hasMany('App\UserLessonMap');
    }
    public function activeLesson(){
        return $this->userLessonMaps()->where('status','=', 1)->get()->first();
    }

    public function userTestMaps(){
        return $this->hasMany('App\UserTestMap');
    }
    public function activeTest(){
        return $this->userTestMaps()->where('status','=', 1)->get()->first();
    }

    public function userContentMaps(){
        return $this->hasMany('App\UserContentMap');
    }
    public function activeContent(){
        return $this->userContentMaps()->where('status','=', 1)->get()->first();
    }
}
