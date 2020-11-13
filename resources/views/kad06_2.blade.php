@extends('layouts.kadapp')
@section('title','課題 06_2')
@section('title2','ファイルのアップロード')
@section('content')
    <div>
        <div>以下のファイルをアップロードしました</div>
        <div>
            <img src="{{asset('/storage/kad06_images/'.$image)}}">
        </div>
        </div>
        <a href="/kad06_1">戻る</a>
    </div>
@endsection
