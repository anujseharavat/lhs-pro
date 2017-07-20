<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$2y$10$2Dh4mgdeNJH4K4VopfiwO.uoPvtH1kqHqgX.t6WtWqVmhn8Z8B1zO
        $seed = new \App\User([
            'first_name' => 'a',
            'last_name' => 'a',
            'country' => 'India',
            'email' => 'a@a.a',
            'password' => '$2y$10$2Dh4mgdeNJH4K4VopfiwO.uoPvtH1kqHqgX.t6WtWqVmhn8Z8B1zO'
        ]);
        $seed->save();
    }
}
