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
            'id' => 1,
            'name' => 'E Book'
        ]);
        $seed->save();
        $seed = new \App\ContentType([
            'id' => 2,
            'name' => 'Video Lesson'
        ]);
        $seed->save();
        $seed = new \App\ContentType([
            'id' => 3,
            'name' => 'Animated Lesson'
        ]);
        $seed->save();
        $seed = new \App\ContentType([
            'id' => 4,
            'name' => 'Question Drill'
        ]);
        $seed->save();
//        $seed = new \App\ContentType([
//            'name' => 'MC Quiz'
//        ]);
//        $seed->save();

    }
}
