<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>（タスクの作成）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class="title">
        <div style="padding: 10px; margin-bottom: 10px; border: 1px dotted #333333; border-radius: 5px;">
        
        <div class="header">
            <p><a href="/">back</a></p>
        </div>
        
        <h2>タスクを追加する</h2>
        <form action="/posts" method="POST"></form>
        
            @csrf
            <div class="title">
            <h2>タスク<h2>
            <input type="text" name="todo[title]" placeholder="タスク"/>
            </div>
    
            <div class="detail">
            <h2>説明</h2>
            <input type="text" name="todo[detail]" placeholder="詳細"/>
            </div>
            
            <div class="limit">
            <h2>締め切り</h2>
            <input type="text" name="todo[limit]" placeholder="締め切り"/>
            </div>
            
            <p><input type="submit" value="store"/></p>
        </form>
        
        
    </body>
</html>
