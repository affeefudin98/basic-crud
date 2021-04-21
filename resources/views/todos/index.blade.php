<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos</title>

        <style>
            body {
                font-family: 'Times New Roman', sans-serif;
            }
        </style>
    </head>

    <body>
        <h1>TODOS PAGE</h1>
        
        @foreach($todos as $todo)
        <li>
            {{$todo->name}} -
            {{$todo->description}} -
            {{$todo->completed}}  
        </li>
        @endforeach


    </body>
</html>
