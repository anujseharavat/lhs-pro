<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new \App\Course([
            'product_code'=> 'LHS Intro 250',
            'name' => 'LHS Intro Package',
            'class_name' => 'Pre IGCSE',
            'desc' => '3 (1+1+1) Semesters 7 IGCSE Subjects With 1EA-Csr ',
            'addons' => '4(3+1) Semesters 4 Pre IGCSE ',
            'duration' => '7 Semesters',
            'price' => '250'
        ]);
        $course->save();
        $course = new \App\Course([
            'product_code'=> 'LHS 99',
            'name' => 'Toddler IGCSE',
            'class_name' => 'toddlers',
            'desc' => 'Rhymes',
            'addons' => 'English, Maths & Science',
            'duration' => '6 month',
            'price' => '99'
        ]);
        $course->save();
    }
}
