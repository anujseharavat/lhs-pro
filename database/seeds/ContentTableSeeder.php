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
        //English-----------------
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 3,
            'type' => 3, //Animated Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 3,
            'type' => 3, //Animated Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-English Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
        //Economy
        $seed = new \App\Content([
            'lesson_id' => 4,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economy E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 4,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economy E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 5,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economy Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 5,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economy Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 6,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economy Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 6,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Economy Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
        //Physics
        $seed = new \App\Content([
            'lesson_id' => 7,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 7,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 8,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 8,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 9,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 9,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Physics Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
        //Chemistory
        $seed = new \App\Content([
            'lesson_id' => 10,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistory E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 10,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistory E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 11,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistory Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 11,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistory Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 12,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistory Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 12,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Chemistory Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
        //Biology
        $seed = new \App\Content([
            'lesson_id' => 13,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 13,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 14,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 14,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 15,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 15,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Biology Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
        //Mathametic
        $seed = new \App\Content([
            'lesson_id' => 16,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Mathametic E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 16,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Mathametic E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 17,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Mathametic Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 17,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Mathametic Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 18,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Mathametic Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 18,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-Mathametic Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
        //ICT
        $seed = new \App\Content([
            'lesson_id' => 19,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT E Book Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 19,
            'type' => 1, //E Book
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT E Book Lesson-1 Content 2'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 20,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Video Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 20,
            'type' => 2, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Video Lesson Lesson-1 Content 2'
        ]);
        $seed->save();

        $seed = new \App\Content([
            'lesson_id' => 21,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Animated Lesson Lesson-1 Content 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 21,
            'type' => 3, //Video Lesson
            'path' => '/home/CHEMISTRY LESSON 13_x264.mp4',
            'details' => 'Sem1-ICT Animated Lesson Lesson-1 Content 2'
        ]);
        $seed->save();
    }
}
