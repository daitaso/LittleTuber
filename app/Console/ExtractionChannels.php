<?php


    //
    // 管理するChannelIDリストを更新する
    // by　YOUTUBE API SEARCH
    //

    //
    // ゲーム配信者紹介サービス
    // YOUTUBE API のsearchで情報を仕入れ
    // 自力のＤＢで検索させる
    //
echo 'testt'.PHP_EOL;
$channels = \App\Models\Extraction::insert(['channel_id' => 'test','keywords' => 'test2']);
echo 'testt2'.PHP_EOL;

return;

    $max_result_cnt = 10;       //１回のリクエストで返却する動画の数
    $max_subscriber = 10000;    //最大チャンネル登録者数
    $min_subscriber = 100;      //最小チャンネル登録者数

//    $keyword        = Input::Get('keyword');
//    $pageToken      = Input::Get('pageToken');
//    $index          = Input::Get('index');

//    require_once (dirname(__FILE__) . '/vendor/autoload.php');
require_once '/Users/miuradaisuke/work/LittleTuber/vendor/autoload.php';


    //Googleクライアントを読み込み、API情報を設定する
    $client = new Google_Client();
    $client->setDeveloperKey("AIzaSyCPbvUE5ltej2yFpgjyF1Ku3wt-1niGPtA");

    //YouTubeの読み込み
    $youtube = new Google_Service_YouTube($client);

    $pageToken = null;

    $maxResults = 50;

    $keyword    = 'ゲーム実況　荒野行動';
    for($i = 0; $i < 15; ++$i){

        $option = array('q' => $keyword,'maxResults' => $maxResults,'type' => 'channel');

        if(!is_null($pageToken)) $option['pageToken'] = $pageToken;

        //検索
        $searchResponse = $youtube->search->listSearch('id,snippet', $option);
        if(count($searchResponse['items']) == 0) break;

        foreach ($searchResponse['items'] as $searchResult) {
            $channels = \App\Models\Extraction::insert(['channel_id' => $searchResult['snippet']['channelId']]);
        }

        if(count($searchResponse['items']) < $maxResults) break;

        $pageToken = $searchResponse['nextPageToken'];
    }
