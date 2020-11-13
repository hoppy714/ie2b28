<!--IE2b２８伊藤歩空-->
@extends('layouts.kadapp')
@section('title','課題 03_3')
@section('title2','Carbonクラス１')
@section('content')
<div class="container">
    <div class="row">
    <div class="row-cols-3">今日は{{$dt->isoFormat('YYYY年MM月DD日(ddd)')}}です。</div>
    <div class="row-cols-6">現在の時刻は{{$dt->format('H時m分s秒')}}です。</div>
    </div>
</div>
@endsection
