<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
// チャンネル詳細画面コントローラ
//
class DetailController extends Controller{

    public function index(Request $request){

        //クエリパラメータ取得
        $channel_id = $request->input('channel_id');
        $range = $request->input('range');

        //channels検索
        $channels = \App\Models\Channel::where('channel_id',$channel_id)->get();
        $growths  = \App\Models\Growth::where('channel_id',$channel_id)->get();

        $point = 0;
        foreach ($growths as $growth) {

            $point += $growth->like_count  * 5;
            $point += $growth->subscribers * 100;
            $point += $growth->view_count;
            $point += $growth->comment_count * 2;

            $channel['point'] = $point;

        }

        return view('detail',compact('channels','growths'));

    }

}
