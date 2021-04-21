<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {

        //fetch all todos data in databse

        //displaye them in todos.index

        return view('todos.index') -> with('todos', Todo::all());
    }
}
