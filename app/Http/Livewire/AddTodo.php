<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AddTodo extends Component
{
    public $content;

    public function store()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $tenantDatabase = 'tenant' . $user->tenant_id;
            
            // Проверете дали вече сте свързани към желаната база данни
            if (config('database.default') !== $tenantDatabase) {
                // Променете връзката с базата данни
                config(['database.connections.mysql.database' => $tenantDatabase]);
                DB::reconnect('mysql');
            }
        }
    
        // Валидация и създаване на запис
        $this->validate([
            'content' => 'required'
        ]);
    
        TodoList::create([
            'content' => $this->content
        ]);
    
        $this->content = '';
    
        $this->emit('todoAdded');
    }
    

    public function render()
    {
        return view('livewire.add-todo');
    }
}

