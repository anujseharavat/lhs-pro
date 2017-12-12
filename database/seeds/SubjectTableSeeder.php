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
            'id'=>1,
            'semester_id'=> 1,
            'name' => 'English(0510)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>2,
            'semester_id'=> 1,
            'name' => 'Economy(0455)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>3,
            'semester_id'=> 1,
            'name' => 'Physics(0625)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>4,
            'semester_id'=> 1,
            'name' => 'Chemistry(0620)',
        ]);
        $seed->save();
        $seed->save();
        $seed = new \App\Subject([
            'id'=>5,
            'semester_id'=> 1,
            'name' => 'Biology(0610)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>6,
            'semester_id'=> 1,
            'name' => 'Add Maths(0606)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>7,
            'semester_id'=> 1,
            'name' => 'Mathametic(0508)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>8,
            'semester_id'=> 1,
            'name' => 'ICT(0417)',
        ]);
        $seed->save();
        //Semester-2----------------------
        $seed = new \App\Subject([
            'id'=>11,
             'semester_id'=> 2,
            'name' => 'English(0510)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>12,
             'semester_id'=> 2,
            'name' => 'Economy(0455)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>13,
             'semester_id'=> 2,
            'name' => 'Physics(0625)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>14,
             'semester_id'=> 2,
            'name' => 'Chemistry(0620)',
        ]);
        $seed->save();
        $seed->save();
        $seed = new \App\Subject([
            'id'=>15,
             'semester_id'=> 2,
            'name' => 'Biology(0610)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>16,
             'semester_id'=> 2,
            'name' => 'Add Maths(0606)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>17,
             'semester_id'=> 2,
            'name' => 'Mathametic(0508)',
        ]);
        $seed->save();
        $seed = new \App\Subject([
            'id'=>18,
             'semester_id'=> 2,
            'name' => 'ICT(0417)',
        ]);
        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'Biology',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'Maths',
//        ]);
//        $seed->save();
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'AddMaths',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'English',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'ICT',
//        ]);
//        $seed->save();
//        $seed = new \App\Subject([
//            'semester_id'=> 2,
//            'name' => 'Economics',
//        ]);
//        $seed->save();
    }
}
