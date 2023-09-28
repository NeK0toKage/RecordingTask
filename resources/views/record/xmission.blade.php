<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（クリック→詳細,期限,サブタスク,自動では消えないCLEAR）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="antialiased">
    <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
        
    <h2 class="title","limit">
        {{ $mainTodo->title}}
        {{ $mainTodo->limit}}
        <p>{{ $mainTodo->detail}}</p>
        </h2>
        
        @foreach($subTodos as $detailsub)
    
        <div class='xmission-subcontent'>
            <h3 class='title'>{{ $detailsub->title }}</h3>
            <p class='check'>{{ $detailsub->check }}</p>
        </div>
        @endforeach
        
        <div class="footer">
            <a href="/back">back</a>
            
        <div class="footer">
            <a href="/todos/{{ $mainTodo->id }}/edit">edit</a>
        </div>
            
            <p><a href="/editor">追加する<a></p>
        </div>
        
    </body>
</html>
