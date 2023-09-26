<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（ログイン名/日数,ストップウォッチ,合計,コメント,ST_ART/OP,missi,recoボタン）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="antialiased">
    <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
    <h2>RECORD</h2>
    
    <div class='user'>　//ログイン名
        @foreach ($users as $userss)
        <div class='users'>
            <h3 class='users'>{{ $users->name }}</h2>
        </div>
        @endforeach
        
    <div class='memo'>　//コメント
        @foreach ($memo as $memo)
        <div class='date'>
            <h3 class='memo'>{{ $memo->date }}</h2>
            <p class='memo'>{{ memo->comment }}</p>
        </div>
        @endforeach
        
    //ストップウォッチ
    //合計
    //スタートボタン
    //ストップボタン
    //ミッション開くボタン
    //レコード開くボタン
    
    
        
    