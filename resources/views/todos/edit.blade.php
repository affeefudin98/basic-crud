@extends('layouts.app')

@section('title')
Edit Todos
@endsection

@section('content')
<h1 class="text-center my-5">Edit Todos</h1>
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card card-default">
            <div class="card-header">Edit Todos</div>
            <div class="card-body">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="lst-group-item">
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('todos.update', $todo)}}" method="POST">

                    @csrf
                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$todo->name}}">
                    </div>

                    <div class="form-group my-3">
                        <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control">{{$todo->description}}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Todo</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection