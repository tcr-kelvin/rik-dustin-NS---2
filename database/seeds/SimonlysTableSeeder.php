<?php

use Illuminate\Database\Seeder;

class SimonlysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Simonly::class, 50)->create();
    }
}
