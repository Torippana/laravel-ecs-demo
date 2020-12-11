@extends('layouts.app')

@section('content')
    <h3>Laravel on ECS Demo</h3>
    <ul>
        <li>laravelソースコードをコンテナ内にコピー</li>
        <li>コンテナ内でセットアップしたimageを作成</li>
        <li>ECRにimageをPUSH</li>
        <li>ECS fargateでpull</li>
    </ul>
@endsection
