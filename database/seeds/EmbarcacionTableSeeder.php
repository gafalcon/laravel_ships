<?php

use Illuminate\Database\Seeder;

class EmbarcacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Embarcacion::class, 10)->create();
        //
    }
}
