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
        //subject_id-1
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Subject-1 Lesson-1',
            'desc'=> 'Lesson-1 content for subject_id-1'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Subject-1 Lesson-2',
            'desc'=> 'Lesson-2 content for subject_id-1'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Subject-1 Lesson-3',
            'desc'=> 'Lesson-3 content for subject_id-1'
        ]);
        $seed->save();
        //subject_id-2
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Subject-2 Lesson-1',
            'desc'=> 'Lesson-1 content for subject_id-2'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Subject-2 Lesson-2',
            'desc'=> 'Lesson-2 content for subject_id-2'

        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Subject-2 Lesson-3',
            'desc'=> 'Lesson-3 content for subject_id-2'
        ]);
        $seed->save();
        //subject-3
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Subject-3 Lesson-1',
            'desc'=> 'Lesson-1 content for subject_id-3'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Subject-3 Lesson-2',
            'desc'=> 'Lesson-2 content for subject_id-3'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Subject-3 Lesson-3',
            'desc'=> 'Lesson-3 content for subject_id-3'
        ]);
        $seed->save();
    }
}
