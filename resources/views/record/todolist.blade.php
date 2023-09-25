<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（ToDoの一覧、未完了/完了で分ける）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="antialiased">
    <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
    
    <h2>MISSION</h2>
    
    <div class='todolists'>
        @foreach ($todoss as $todoo)
        <div class='todolist'>
            <p>{{$todoo->user->name}}</p>
            <p class='title'>{{ $todoo->title }}</p>
            <p><h5 class='detail'>{{ $todoo->detail }}</h5></p>
            <p><h5 class='limit'>{{ $todoo->limit }}</h5></p>
            <p><h5 class='check'>{{ $todoo->check }}</h5></p>
        </div>
        
        <div class='sub_todolists'>
            @foreach ($todoo->sub_todos as $sub_todo)
            <div class='sub_todolist'>
                <p>{{$sub_todo->user->name}}</p>
                <h3 class='title'>{{ $sub_todo->title }}</h3>
                <p><h5 class='detail'>{{ $sub_todo->detail }}</h5></p>
                <p><h5 class='check'>{{ $sub_todo->check }}</h5></p>
            </div>
            @endforeach
        </div>
        
        @endforeach
    </div>
        
    </body>
</html>
