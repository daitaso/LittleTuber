@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">

            {{--            期間指定--}}
            <div style="text-align:center;">
                <div class="btn-group-lg mt-3" role="group" aria-label="基本のボタングループ">
                    <button type="button" class="btn btn-secondary">週間</button>
                    <button type="button" class="btn btn-secondary">月間</button>
                    <button type="button" class="btn btn-secondary">年間</button>
                </div>
            </div>

            {{--            フィルターキーワード--}}
            <div class="input-group my-3">
                <input type="text" class="form-control mx-3" placeholder="キーワード">
                <span class="input-group-btn">
        	    	<button type="button" class="btn btn-info">検索</button>
            	</span>
            </div>

            {{--            チャンネルレコード--}}
            @foreach($results as $result)
                <div class="card mx-auto my-3" style="width: 18rem;">
                    <div class="card-header">
                        {{$result->point}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$result->title}}</h5>
                        <h6 class="card-subtitle text-muted">{{$result->has_games}}</h6>
                    </div>
                    <img class="card-img-bottom" src="{{$result->thumbnail}}" alt="Card image cap">
                    <div class="card-footer">
                        <a href="{{url("/detail?channel_id={$result->channel_id}")}}" class="card-link">Detail link</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@endsection