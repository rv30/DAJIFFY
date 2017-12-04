<?php

use Illuminate\Database\Seeder;

class requestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(\App\request::class,50)->create();
    }
}
