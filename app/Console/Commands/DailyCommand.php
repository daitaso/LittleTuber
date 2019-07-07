<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DailyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'デイリー更新処理';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        echo 'daily task'.PHP_EOL;


        $channel_id = 'UCYEfviOf79pvVgFHJBHbHvQ';
        $url  = 'https://www.youtube.com/channel/';
        $url .= $channel_id;

        $goutte = \Goutte::request('GET', $url);

        echo $goutte->html();

    }
}
