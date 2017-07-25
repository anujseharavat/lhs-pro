<?php

use Illuminate\Database\Seeder;

class UserLessonMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 1,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 2,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 3,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 4,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 5,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 6,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 7,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 8,
        ]);
        $seed->save();
        $seed = new \App\UserLessonMap([
            'user_id'=> 1,
            'lesson_id' => 9,
        ]);
        $seed->save();

    }
}
