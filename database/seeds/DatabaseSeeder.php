<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CourseTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(LessonTableSeeder::class);
        $this->call(TestTableSeeder::class);
        $this->call(ContentTypeTableSeeder::class);
        $this->call(ContentTableSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(UserTableSeeder::class);
//        $this->call(UserSemesterMapSeeder::class);
//        $this->call(UserSubjectMapSeeder::class);
//        $this->call(UserLessonMapSeeder::class);
//        $this->call(UserContentMapSeeder::class);
        //$this->call(UserTestMapSeeder::class);
    }
}
