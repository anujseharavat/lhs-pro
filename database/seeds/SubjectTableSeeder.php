<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Semester-1 Physics',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Semester-1 Chemistry',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Semester-1 Maths',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Semester-2 Physics',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Semester-2 Chemistry',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Semester-2 Maths',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 3,
            'name' => 'Semester-3 Physics',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 3,
            'name' => 'Semester-3 Chemistry',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 3,
            'name' => 'Semester-3 Maths',
        ]);
        $seed->save();
    }
}
