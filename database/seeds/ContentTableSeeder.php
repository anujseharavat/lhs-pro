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
        //Lesson-1 E Book
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 1, //E Book
            'path' => 'L1-T1-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 1, //E Book
            'path' => 'L1-T1-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 1, //E Book
            'path' => 'L1-T1-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Lesson Notes
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 2, //Lesson Notes
            'path' => 'L1-T2-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 2, //Lesson Notes
            'path' => 'L1-T2-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 2, //Lesson Notes
            'path' => 'L1-T2-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Animated Lesson
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 3, //Animated Lesson
            'path' => 'L1-T3-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 3, //Animated Lesson
            'path' => 'L1-T3-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 3, //Animated Lesson
            'path' => 'L1-T3-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Question Drill
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 4, //Question Drill
            'path' => 'L1-T4-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 4, //Question Drill
            'path' => 'L1-T4-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 1,
            'type' => 4, //Question Drill
            'path' => 'L1-T4-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Lesson-2 E Book
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 1, //E Book
            'path' => 'L2-T1-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 1, //E Book
            'path' => 'L2-T1-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 1, //E Book
            'path' => 'L2-T1-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Lesson Notes
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Lesson Notes
            'path' => 'L2-T2-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Lesson Notes
            'path' => 'L2-T2-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 2, //Lesson Notes
            'path' => 'L2-T2-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Animated Lesson
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 3, //Animated Lesson
            'path' => 'L2-T3-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 3, //Animated Lesson
            'path' => 'L2-T3-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 3, //Animated Lesson
            'path' => 'L2-T3-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();

        //Question Drill
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 4, //Question Drill
            'path' => 'L2-T4-1/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 4, //Question Drill
            'path' => 'L2-T4-2/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
        $seed = new \App\Content([
            'lesson_id' => 2,
            'type' => 4, //Question Drill
            'path' => 'L2-T4-3/ah.com',
            'details' => 'This content type details for lesson_id 1'
        ]);
        $seed->save();
    }
}
