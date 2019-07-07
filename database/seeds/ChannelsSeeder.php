<?php

use Illuminate\Database\Seeder;

class ChannelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('channels')->insert([
            'channel_id' => 'UCAYrMNl92jw6cpjdpBP8JyA',
            'title' => 'Ru s Piano Ru味春捲',
            'thumbnail' => 'https://yt3.ggpht.com/a/AGF-l78qG8PwXn27Yr-2rwLXqvNsCPe1IwGpSmYauw=s288-mo-c-c0xffffffff-rj-k-no',
            'subscribers' => '100',
            'has_games' => '荒野行動',
            'movie_id' =>  'aiueo',
            'movie_title' => 'bbbb',
            'movie_thumbnail' => 'ccc',
            'movie_post' => '2019-09-20',
        ]);
    }
}
