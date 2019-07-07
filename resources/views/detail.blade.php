@extends('layout')
@section('content')

<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-3">
            <img class="m-2 img-thumbnail" src="{{$channels[0]->thumbnail}}" alt="">
        </div>
        <div class="col-sm-9">
            <h1>{{$channels[0]->title}}</h1>
            <p class="text-muted">{{$channels[0]->has_games}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h4 class="mt-4">獲得チャンネル登録数</h4>
            <ul>
                <li>週間（{{$growths[0]->day}} - {{$growths[count($growths)-1]->day}}）</li>
                <li>月間（{{$growths[0]->day}} - {{$growths[count($growths)-1]->day}}）</li>
                <li>年間（{{$growths[0]->day}} - {{$growths[count($growths)-1]->day}}）</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h4 class="mt-4">推移</h4>
        </div>
    </div>

</div>

@endsection