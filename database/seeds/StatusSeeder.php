<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new \App\Status([
            'id' => 0,
            'name' => 'Locked',
        ]);
        $seed->save();
        $seed = new \App\Status([
            'id' => 1,
            'name' => 'In Progress',
        ]);
        $seed->save();
        $seed = new \App\Status([
            'id' => 2,
            'name' => 'Completed',
        ]);
        $seed->save();
    }
}
