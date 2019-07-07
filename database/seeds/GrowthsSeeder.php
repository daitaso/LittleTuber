<?php

use Illuminate\Database\Seeder;

class GrowthsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('growths')->insert([
            'channel_id' => 'UCAYrMNl92jw6cpjdpBP8JyA',
            'day' => '2019-09-20',
            'subscribers' => '20',
        ]);
        DB::table('growths')->insert([
            'channel_id' => 'UCAYrMNl92jw6cpjdpBP8JyA',
            'day' => '2019-09-21',
            'subscribers' => '20',
        ]);
        DB::table('growths')->insert([
            'channel_id' => 'UCAYrMNl92jw6cpjdpBP8JyA',
            'day' => '2019-09-22',
            'subscribers' => '20',
        ]);
        DB::table('growths')->insert([
            'channel_id' => 'UCAYrMNl92jw6cpjdpBP8JyA',
            'day' => '2019-09-23',
            'subscribers' => '20',
        ]);
        DB::table('growths')->insert([
            'channel_id' => 'UCAYrMNl92jw6cpjdpBP8JyA',
            'day' => '2019-09-24',
            'subscribers' => '20',
        ]);


    }
}
