<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TodoListController extends Controller
{
   
    public function index()
    {
            $user = Auth::user();
            $tenantDatabase = 'tenant' . $user->tenant_id;
            config(['database.connections.mysql.database' => $tenantDatabase]);
            DB::reconnect('mysql');

    
        $todolists = TodoList::all(); 
        return view('home', compact('todolists'));
    }
    

    
    public function edit($id)
    {
        $todolist = TodoList::findOrFail($id);
        return view('edit', compact('todolist'));
    }

}
