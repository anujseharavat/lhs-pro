<?php

use Illuminate\Database\Seeder;

class UserSubjectMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User Subject Map
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 1,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 2,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 3,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 4,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 5,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 6,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 7,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 8,
        ]);
        $seed->save();
        $seed = new \App\UserSubjectMap([
            'user_id'=> 1,
            'subject_id' => 9,
        ]);
        $seed->save();
    }
}
