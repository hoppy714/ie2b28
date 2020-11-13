<!--IE2b２８伊藤歩空-->
@extends('layouts.kadapp')
@section('title','課題 03_1')
@section('title2','Blade のテンプレートで表示する')
@section('content')
<div class="container">
<table class="table table-bordered">
    <thead></thead>
    <tbody>
        <tr class="info">
            <th>blade で表示しています。</th>
            <th>{{$message}}</th>
        </tr>
    </tbody>
</table>
</div>
@endsection
