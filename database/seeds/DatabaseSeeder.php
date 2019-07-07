<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChannelsSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(GrowthsSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}
