<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    </head>

    <body>

        <div class="container">
            <h1 class="text-center my-4">TODOS PAGE</h1>
            <div class="row-justify-content-center">
                <div class="col-md-8 offset-md-2">
                    <div class="card card-default">
                        <div class="card-header">TODOS</div>
                        
                        <div class="card-body">
                            <li class="list-group">
                                @foreach($todos as $todo)
                                <li class="list-group-item">
                                    {{$todo->name}} 

                                    <button class="btn btn-primary btn-sm float-end">View</button>
                                </li>
                              
                                @endforeach
                            </li>
                           
                        </div>
                    </div>
                </div>

            </div>
        
        </div>

        


    </body>
</html>
