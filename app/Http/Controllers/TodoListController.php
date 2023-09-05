<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
   
    public function index()
    {
        $todolists = TodoList::all();
        return view('home', compact('todolists'));
    }

    
    public function edit($id)
    {
        $todolist = TodoList::findOrFail($id);
        return view('edit', compact('todolist'));
    }

}
