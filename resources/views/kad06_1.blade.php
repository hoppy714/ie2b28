@extends('layouts.kadapp')
@section('title','課題 06_1')
@section('title2','ファイルのアップロード')
@section('content')
<form action="/kad06_1" method="POST" novalidate enctype="multipart/form-data">
    @csrf
    <div>
        <div>画像ファイルをアップロードします</div>
        <input type="file" name="image">
        @error('image')
        <div>{{$message}}</div>
        @enderror
    </div>


    <div class="form-group row">
        <div class="col-sm">
            <input type="submit" class="btn btn-primary" name="sub" value="送信">
        </div>
    </div>
</form>
@endsection
