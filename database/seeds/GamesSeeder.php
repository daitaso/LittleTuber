<?php

use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('games')->insert([
            'game_id' => '0001',
            'game_title' => '荒野行動',
            'keyword' => 'PUBG',
         ]);
    }
}
