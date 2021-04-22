@extends('layouts.app')

@section('content')
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

                        <a href="/todos/{{$todo -> id}}" class="btn btn-primary btn-sm float-end">View</a>
                    </li>
                  
                    @endforeach
                </li>
               
            </div>
        </div>
    </div>

</div>
@endsection