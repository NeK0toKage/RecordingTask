<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（タスクの編集）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="content">
        <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
        <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method("put")
        
        <div class='content=title'>
            <h2>タスク</h2>
                <input type='text' name='todo[title]' value="{{ $todo->title }}">
        </div>
        
        <div class='content=title'>
            <h2>説明</h2>
                <input type='text' name='todo[detail]' value="{{ $todo->detail }}">
                
        <div class='content=title'>
            <h2>締め切り</h2>
                <input type='text' name='todo[limit]' value="{{ $todo->limit }}">
        
        </div>
            <p><input type="submit" value="保存"></p>
        </form>
        
    </body>
</html>
