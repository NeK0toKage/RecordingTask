<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Sub_todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function todolist(Todo $todo,Sub_todo $sub_todo, Request $request)
    {
        return view('record.todolist')->with(['todoss' => $todo->get(),'sub_todos' => $sub_todo->get()]);
    }
    
    //public function todolis(Todo $todo)
    //{
        //return view('record.todolist')->with(['todos' =>$todo->getByLimit()]);
    //}

}

?>