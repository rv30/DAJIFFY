<?php

use Illuminate\Database\Seeder;

class notificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\NotificationModel::class, 50)->create();
        //
    }
}
