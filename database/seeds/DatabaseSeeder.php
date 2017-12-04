<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
            $this->call(requestSeeder::class);
                $this->call(contentSeeder::class);
                    $this->call(notificationSeeder::class);

        // factory(App\user::class,10)->create();
    }
}
