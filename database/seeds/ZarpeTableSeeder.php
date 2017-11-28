<?php

use Illuminate\Database\Seeder;

class ZarpeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Zarpe::class, 50)->create();
        //
    }
}
