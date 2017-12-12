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
        //English-----------------
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'E Books Lesson',
            'content_type' => 1,
            'desc'=> 'Subject English Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject English Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 1,
            'name' => 'Animated',
            'content_type' => 3,
            'desc'=> 'Subject English Lesson'
        ]);
        $seed->save();
        //Economy
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject Economy Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject Economy Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 2,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject Economy Lesson'
        ]);
        $seed->save();
        //Physics
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject Physics Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject Physics Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 3,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject Physics Lesson'
        ]);
        $seed->save();
        //Chemistry
        $seed = new \App\Lesson([
            'subject_id'=> 4,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject Chemistry Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 4,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject Chemistry Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 4,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject Chemistry Lesson'
        ]);
        $seed->save();
        //Biology
        $seed = new \App\Lesson([
            'subject_id'=> 5,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject Biology Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 5,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject Biology Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 5,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject Biology Lesson'
        ]);
        $seed->save();
        //Add maths
        $seed = new \App\Lesson([
            'subject_id'=> 6,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject Add maths Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 6,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject Add maths Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 6,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject Add maths Lesson'
        ]);
        $seed->save();
        //Mathematics
        $seed = new \App\Lesson([
            'subject_id'=> 7,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject Mathematics Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 7,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject Mathematics Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 7,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject Mathematics Lesson'
        ]);
        $seed->save();
        //ICT
        $seed = new \App\Lesson([
            'subject_id'=> 8,
            'name' => 'E Books',
            'content_type' => 1,
            'desc'=> 'Subject ICT Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 8,
            'name' => 'Video Lesson',
            'content_type' => 2,
            'desc'=> 'Subject ICT Lesson'
        ]);
        $seed->save();
        $seed = new \App\Lesson([
            'subject_id'=> 8,
            'name' => 'Animated Lesson',
            'content_type' => 3,
            'desc'=> 'Subject ICT Lesson'
        ]);
        $seed->save();
//Semester2
        //English-----------------
        $seed = new \App\Lesson([
            'subject_id'=> 11,
            'name' => 'English Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject English Question Drill'
        ]);
        $seed->save();
        //Economy
        $seed = new \App\Lesson([
            'subject_id'=> 12,
            'name' => 'Economy Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject Economy Question Drill'
        ]);
        $seed->save();
        //Physics
        $seed = new \App\Lesson([
            'subject_id'=> 13,
            'name' => 'Physics Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject Physics Question Drill'
        ]);
        $seed->save();
        //Chemistry
        $seed = new \App\Lesson([
            'subject_id'=> 14,
            'name' => 'Chemistry Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject Chemistry Question Drill'
        ]);
        $seed->save();
        //Biology
        $seed = new \App\Lesson([
            'subject_id'=> 15,
            'name' => 'Biology Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject Biology Question Drill'
        ]);
        $seed->save();
        //Add maths
        $seed = new \App\Lesson([
            'subject_id'=> 16,
            'name' => 'Add maths Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject Add maths Question Drill'
        ]);
        $seed->save();
        //Mathematics
        $seed = new \App\Lesson([
            'subject_id'=> 17,
            'name' => 'Mathematics Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject Mathematics Question Drill'
        ]);
        $seed->save();
        //ICT
        $seed = new \App\Lesson([
            'subject_id'=> 18,
            'name' => 'ICT Question Drill',
            'content_type' => 4,
            'desc'=> 'Subject ICT Question Drill'
        ]);
        $seed->save();
    }
}
