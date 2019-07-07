<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Google_Client;
use Google_Service_YouTube;

class ExtractionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:extract';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'YOUTUBEからチャンネルIDを抽出する';

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
        // 管理するChannelIDリストを更新する
        // by　YOUTUBE API SEARCH
        //

//    $keyword        = Input::Get('keyword');

        //Googleクライアントを読み込み、API情報を設定する
        $client = new Google_Client();
        $client->setDeveloperKey("AIzaSyCPbvUE5ltej2yFpgjyF1Ku3wt-1niGPtA");

        //YouTubeの読み込み
        $youtube = new Google_Service_YouTube($client);

        $pageToken = null;
        $maxResults = 50;

        $game_tag = "荒野行動";
        $keyword    = 'ゲーム実況　'.$game_tag;
        for($i = 0; $i < 3; ++$i){

            $option = array('q' => $keyword,'maxResults' => $maxResults,'type' => 'channel');

            if(!is_null($pageToken)) $option['pageToken'] = $pageToken;

            //検索
            $searchResponse = $youtube->search->listSearch('id,snippet', $option);
            if(count($searchResponse['items']) == 0) break;

            foreach ($searchResponse['items'] as $searchResult) {
                $extraction = new \App\Models\Extraction;
                $extraction->channel_id = $searchResult['snippet']['channelId'];
                $extraction->keywords   = $game_tag;
                $extraction->save();
            }

            if(count($searchResponse['items']) < $maxResults) break;

            $pageToken = $searchResponse['nextPageToken'];
        }

    }
}
