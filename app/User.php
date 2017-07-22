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
    public function userActiveSemester(){
        return $this->userSemesterMaps()->where('status','=', 'started')->get();
    }

    public function userSubjectMaps(){
        return $this->hasMany('App\UserSubjectMap');
    }
    public function userActiveSubject(){
        return $this->userSubjectMaps()->where('status','=', 'started')->get()->first();
    }

    public function userLessonMaps(){
        return $this->hasMany('App\UserLessonMap');
    }
    public function userActiveLesson(){
        return $this->userLessonMaps()->where('status','=', 'started')->get()->first();
    }

    public function userTestMaps(){
        return $this->hasMany('App\UserTestMap');
    }
    public function userActiveTest(){
        return $this->userTestMaps()->where('status','=', 'started')->get()->first();
    }
}
