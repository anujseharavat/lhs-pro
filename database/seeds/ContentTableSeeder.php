<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semester -1 -----------------------------------------
        //Physics-----------------
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 3,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 3,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Animated Lesson-2'
        ]);
        $seed->save();

        //Chemistry-----------------
        $seed = new \App\Content([
            'lesson_id' => 4,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistry E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 5,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistry Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 5,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistry Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 6,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistry Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' =>  6,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistry Animated Lesson-2'
        ]);
        $seed->save();

        //Biology-----------------
        $seed = new \App\Content([
            'lesson_id' => 7,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 8,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 8,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 9,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 9,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Animated Lesson-2'
        ]);
        $seed->save();

        //Maths-----------------
        $seed = new \App\Content([
            'lesson_id' => 10,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Maths E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 11,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Maths Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 11,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Maths Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 12,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Maths Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 12,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Maths Animated Lesson-2'
        ]);
        $seed->save();

        //AddMaths-----------------
        $seed = new \App\Content([
            'lesson_id' => 13,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-AddMaths E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 14,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-AddMaths Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 14,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-AddMaths Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 15,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-AddMaths Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 15,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-AddMaths Animated Lesson-2'
        ]);
        $seed->save();

        //English-----------------
        $seed = new \App\Content([
            'lesson_id' => 16,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 17,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 17,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 18,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 18,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Animated Lesson-2'
        ]);
        $seed->save();

        //ICT-----------------
        $seed = new \App\Content([
            'lesson_id' => 19,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 20,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 20,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 21,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 21,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Animated Lesson-2'
        ]);
        $seed->save();

        //Eco-----------------
        $seed = new \App\Content([
            'lesson_id' => 22,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economics E Book-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 23,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economics Video Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 23,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economics Video Lesson-2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 24,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economics Animated Lesson-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 24,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economics Animated Lesson-2'
        ]);
        $seed->save();


        //Semester -2-----------------------------------------
        //Physics-----------------
        $seed = new \App\Content([
            'lesson_id' => 25,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-Physics Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 26,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-Chemistry Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 27,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-Biology Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 28,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-Maths Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 29,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-AddMaths Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 30,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-English Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 31,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-ICT Question Drill-1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 32,
            'type' => 4, //Question Drill
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem2-Economics Question Drill-1'
        ]);
        $seed->save();

//        //Lesson-1 E Book
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 1, //E Book
//            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 1, //E Book
//            'path' => 'L1-T1-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 1, //E Book
//            'path' => 'L1-T1-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Lesson Notes
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 2, //Lesson Notes
//            'path' => 'L1-T2-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 2, //Lesson Notes
//            'path' => 'L1-T2-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 2, //Lesson Notes
//            'path' => 'L1-T2-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Animated Lesson
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 3, //Animated Lesson
//            'path' => 'L1-T3-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 3, //Animated Lesson
//            'path' => 'L1-T3-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 3, //Animated Lesson
//            'path' => 'L1-T3-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Question Drill
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 4, //Question Drill
//            'path' => 'L1-T4-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 4, //Question Drill
//            'path' => 'L1-T4-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 1,
//            'type' => 4, //Question Drill
//            'path' => 'L1-T4-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Lesson-2 E Book
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 1, //E Book
//            'path' => 'L2-T1-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 1, //E Book
//            'path' => 'L2-T1-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 1, //E Book
//            'path' => 'L2-T1-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Lesson Notes
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 2, //Lesson Notes
//            'path' => 'L2-T2-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 2, //Lesson Notes
//            'path' => 'L2-T2-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 2, //Lesson Notes
//            'path' => 'L2-T2-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Animated Lesson
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 3, //Animated Lesson
//            'path' => 'L2-T3-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 3, //Animated Lesson
//            'path' => 'L2-T3-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 3, //Animated Lesson
//            'path' => 'L2-T3-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//
//        //Question Drill
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 4, //Question Drill
//            'path' => 'L2-T4-1/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 4, //Question Drill
//            'path' => 'L2-T4-2/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
//        $seed = new \App\Content([
//            'lesson_id' => 2,
//            'type' => 4, //Question Drill
//            'path' => 'L2-T4-3/ah.com',
//            'details' => 'This content type details for lesson_id 1'
//        ]);
//        $seed->save();
    }
}
