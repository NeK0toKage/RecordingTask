<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Sub_todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function todolist(Todo $todo,Sub_todo $sub_todo, Request $request)
    {
        return view('record.list')->with(['todoss' => $todo->get(), 'detailsub'=> $todo->get(), 'sub_todos' => $sub_todo->get()]);
    }
    
    //public function todolis(Todo $todo)
    //{
        //return view('record.todolist')->with(['todos' =>$todo->getByLimit()]);
    //}
    
    public function xmission(Todo $todo,Sub_todo $sub_todo)
    {
        return view('record.xmission')->with(['mainTodo'=> $todo,'subTodos'=>$sub_todo->where('todo_id','=',$todo->id)->get()]);
    }
    
    public function create()
    {
        return view('record.createTask');
    }
    
    public function edit(Todo $todo)
    {
        return view('record.edit')->with(['todo'=> $todo]);
    }
    
    public function update(Request $request, Todo $todo)
    {
        $input_todo = $request['todo'];
        $todo->fill($input_todo)->save();

        return redirect('/todolist');
    }

}

?>