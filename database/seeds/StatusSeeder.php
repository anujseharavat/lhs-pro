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
            'name' => 'Locked',
        ]);
        $seed->save();
        $seed = new \App\Status([
            'name' => 'Start',
        ]);
        $seed->save();
        $seed = new \App\Status([
            'name' => 'Completed',
        ]);
        $seed->save();
    }
}
