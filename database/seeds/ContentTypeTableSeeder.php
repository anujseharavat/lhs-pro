<?php

use Illuminate\Database\Seeder;

class ContentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new \App\ContentType([
            'name' => 'E Book'
        ]);
        $seed->save();
        $seed = new \App\ContentType([
            'name' => 'Lesson Notes'
        ]);
        $seed->save();
        $seed = new \App\ContentType([
            'name' => 'Animated Lesson'
        ]);
        $seed->save();
        $seed = new \App\ContentType([
            'name' => 'Question Drill'
        ]);
        $seed->save();
//        $seed = new \App\ContentType([
//            'name' => 'MC Quiz'
//        ]);
//        $seed->save();

    }
}
