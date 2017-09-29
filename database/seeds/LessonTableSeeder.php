<?php

use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semester -1 ------------
        //Physics-----------------
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 Physics'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 Physics'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 Physics'
        ]);
        $seed->save();
        //Chemistry
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 Chemistry'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 Chemistry'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 Chemistry'
        ]);
        $seed->save();
        //Biology
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 Biology'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 Biology'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 Biology'
        ]);
        $seed->save();
        //Maths
        $seed = new \App\Lesson([
            'subject_id'=> 4,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 Maths'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 4,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 Maths'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 4,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 Maths'
        ]);
        $seed->save();
        //AddMaths
        $seed = new \App\Lesson([
            'subject_id'=> 5,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 AddMaths'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 5,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 AddMaths'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 5,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 AddMaths'
        ]);
        $seed->save();
        //English
        $seed = new \App\Lesson([
            'subject_id'=> 6,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 English'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 6,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 English'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 6,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 English'
        ]);
        $seed->save();
        //ICT
        $seed = new \App\Lesson([
            'subject_id'=> 7,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 ICT'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 7,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 ICT'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 7,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 ICT'
        ]);
        $seed->save();
        //Economics
        $seed = new \App\Lesson([
            'subject_id'=> 8,
            'name' => 'E Books Lesson-1',
            'content_type' => 1,
            'desc'=> 'Semester-1 Economics'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 8,
            'name' => 'Video Lesson-1',
            'content_type' => 2,
            'desc'=> 'Semester-1 Economics'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 8,
            'name' => 'Animated Lesson-1',
            'content_type' => 3,
            'desc'=> 'Semester-1 Economics'
        ]);
        $seed->save();
        //Semester -2 --------------------------
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 Physics'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
        'subject_id'=> 9,
        'name' => 'Question Drill Lesson-1',
        'content_type' => 4,
        'desc'=> 'Semester-2 Chemistry'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 Biology'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 Maths'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 AddMaths'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 English'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 ICT'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 9,
            'name' => 'Question Drill Lesson-1',
            'content_type' => 4,
            'desc'=> 'Semester-2 Economics'
        ]);
        $seed->save();






        //subject_id-1
//        $seed = new \App\Lesson([
//            'subject_id'=> 1,
//            'name' => 'Subject-1 Lesson-1',
//            'desc'=> 'Lesson-1 content for subject_id-1'
//        ]);
//        $seed->save();
//        $seed = new \App\Lesson([
//            'subject_id'=> 1,
//            'name' => 'Subject-1 Lesson-2',
//            'desc'=> 'Lesson-2 content for subject_id-1'
//        ]);
//        $seed->save();
//        $seed = new \App\Lesson([
//            'subject_id'=> 1,
//            'name' => 'Subject-1 Lesson-3',
//            'desc'=> 'Lesson-3 content for subject_id-1'
//        ]);
//        $seed->save();
//        //subject_id-2
//        $seed = new \App\Lesson([
//            'subject_id'=> 2,
//            'name' => 'Subject-2 Lesson-1',
//            'desc'=> 'Lesson-1 content for subject_id-2'
//        ]);
//        $seed->save();
//        $seed = new \App\Lesson([
//            'subject_id'=> 2,
//            'name' => 'Subject-2 Lesson-2',
//            'desc'=> 'Lesson-2 content for subject_id-2'
//
//        ]);
//        $seed->save();
//        $seed = new \App\Lesson([
//            'subject_id'=> 2,
//            'name' => 'Subject-2 Lesson-3',
//            'desc'=> 'Lesson-3 content for subject_id-2'
//        ]);
//        $seed->save();
//        //subject-3
//        $seed = new \App\Lesson([
//            'subject_id'=> 3,
//            'name' => 'Subject-3 Lesson-1',
//            'desc'=> 'Lesson-1 content for subject_id-3'
//        ]);
//        $seed->save();
//        $seed = new \App\Lesson([
//            'subject_id'=> 3,
//            'name' => 'Subject-3 Lesson-2',
//            'desc'=> 'Lesson-2 content for subject_id-3'
//        ]);
//        $seed->save();
//        $seed = new \App\Lesson([
//            'subject_id'=> 3,
//            'name' => 'Subject-3 Lesson-3',
//            'desc'=> 'Lesson-3 content for subject_id-3'
//        ]);
//        $seed->save();
    }
}
