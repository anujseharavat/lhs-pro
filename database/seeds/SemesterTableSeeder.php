<?php

use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new \App\Semester([
            'course_id'=> 1,
            'name' => 'Sem-1',
        ]);
        $seed->save();
        $seed = new \App\Semester([
            'course_id'=> 1,
            'name' => 'Sem-2',
        ]);
        $seed->save();
//        $seed = new \App\Semester([
//            'course_id'=> 1,
//            'name' => 'Sem-3',
//        ]);
//        $seed->save();
    }
}
