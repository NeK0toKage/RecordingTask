<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（タブ作成,タスク一覧…何分の何）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    
    <body class="antialiased">
    <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
    <h2 class='title'>MISSION</h2>
    
    <div class='todolists'>
        @foreach ($todoss as $todoo)
        <div class='todolist'>
            <a href="/todos/{{ $todoo->id }}">{{ $todoo->title }}</a>
            <p><h5 class='limit'>{{ $todoo->limit }}</h5></p>
            <p><h5 class='check'>{{ $todoo->check }}</h5></p>
        </div>
        @endforeach
    </div>
        
    </body>
    
</html>
