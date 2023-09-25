<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（編集画面）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="antialiased">
    <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
    <h2>RECORD</h2>
    
    <div class='todos'>
        @foreach ($todos as $todos)
        <div class='todos'>
            <h3 class='todos'>{{ $todos->title }}</h3>
            <p class='progress'>{{ $progress->progress }}</p>
        </div>
        @endforeach
    
        
    </body>
</html>
