<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //semester-1 subject-1 test
        $seed = new \App\Test([
            'Lesson_id'=> 1,
            'subject_id' => 1,
             'semester_id'=> 1,
             'content' => 'Test-1 of Lesson-Name-1 of subject-1 of semester-1'
        ]);
        $seed->save();
        $seed = new \App\Test([
            'Lesson_id'=> 2,
            'subject_id' => 1,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-2 of subject-1 of semester-1'
        ]);
        $seed->save();
        $seed = new \App\Test([
            'Lesson_id'=> 3,
            'subject_id' => 1,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-3 of subject-1 of semester-1'
        ]);
        $seed->save();

        //semester-1 subject-2 test
        $seed = new \App\Test([
            'Lesson_id'=> 4,
            'subject_id' => 2,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-1 of subject-2 of semester-1',
        ]);
        $seed->save();
        $seed = new \App\Test([
            'Lesson_id'=> 5,
            'subject_id' => 2,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-2 of subject-2 of semester-1'
        ]);
        $seed->save();
        $seed = new \App\Test([
            'Lesson_id'=> 6,
            'subject_id' => 2,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-3 of subject-2 of semester-1'
        ]);
        $seed->save();

        //semester-1 subject-3 test
        $seed = new \App\Test([
            'Lesson_id'=> 7,
            'subject_id' => 3,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-1 of subject-3 of semester-1'
        ]);
        $seed->save();
        $seed = new \App\Test([
            'Lesson_id'=> 8,
            'subject_id' => 3,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-2 of subject-3 of semester-1'
        ]);
        $seed->save();
        $seed = new \App\Test([
            'Lesson_id'=> 9,
            'subject_id' => 3,
            'semester_id'=> 1,
            'content' => 'Test-1 of Lesson-Name-3 of subject-3 of semester-1',

        ]);
        $seed->save();
    }
}
