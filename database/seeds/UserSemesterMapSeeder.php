<?php

use Illuminate\Database\Seeder;

class UserSemesterMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new \App\UserSemesterMap([
            'user_id'=> 1,
            'semester_id' => 1,
            'status' => 1
        ]);
        $seed->save();
        $seed = new \App\UserSemesterMap([
            'user_id'=> 1,
            'semester_id' => 2,
        ]);
        $seed->save();
        $seed = new \App\UserSemesterMap([
            'user_id'=> 1,
            'semester_id' => 3,
        ]);
        $seed->save();
    }
}
