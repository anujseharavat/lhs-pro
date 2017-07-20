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
         $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(LessonTableSeeder::class);
        $this->call(TestTableSeeder::class);

    }
}
