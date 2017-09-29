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
            'name' => 'Physics',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Chemistry',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Biology',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Maths',
        ]);
        $seed->save();
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'AddMaths',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'English',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'ICT',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 1,
            'name' => 'Economics',
        ]);
        $seed->save();
        //Semester-2----------------------
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Physics',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Chemistry',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Biology',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Maths',
        ]);
        $seed->save();
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'AddMaths',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'English',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'ICT',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'semester_id'=> 2,
            'name' => 'Economics',
        ]);
        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 1,
//            'name' => 'Semester-1 Physics',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 1,
//            'name' => 'Semester-1 Chemistry',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 1,
//            'name' => 'Semester-1 Maths',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'Semester-2 Physics',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'Semester-2 Chemistry',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'Semester-2 Maths',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 3,
//            'name' => 'Semester-3 Physics',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 3,
//            'name' => 'Semester-3 Chemistry',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 3,
//            'name' => 'Semester-3 Maths',
//        ]);
//        $seed->save();
    }
}
