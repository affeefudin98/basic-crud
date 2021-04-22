<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        //fetch all todos data in databse
        //display them in todos.index

        return view('todos.index') -> with('todos', Todo::all());
    }

    public function show($todoId)
    {
    
        return view('todos.show') -> with('todo', Todo::find($todoId));
    }
}
