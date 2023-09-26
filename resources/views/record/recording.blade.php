<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（時間＃task＃subtodoと進捗メモで表示、スクロール？）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="antialiased">
    <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
    <h2>RECORD</h2>
    
    <div class='todos'>
        @foreach ($todos as $todo)
        <div class='todos'>
            <h3 class='todos'>{{ $todo->title }}</h3>
            <p class='progress'>{{ $progress->progress }}</p>
        </div>
        @endforeach
    
    <div class='time'>
        @foreach ($progress as $progress)
        <div class='progress'>
            <h3 class='start_date''end_date'>{{ $progress->start_date }}</h3>
            <p class='progress'>{{ $progress->progress }}</p>
        </div>
        @endforeach
        
    </body>
</html>
