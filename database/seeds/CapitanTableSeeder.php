<?php

use Illuminate\Database\Seeder;

class CapitanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Capitans
        factory(App\Capitan::class, 10)->create();
    }
}
