<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoList;

class DeleteTodo extends Component
{
    public $todoId;

    public function deleteTodo()
    {
        $todo = TodoList::find($this->todoId);
        
        if ($todo) {
            $todo->delete();
            session()->flash('message', 'Todo успешно изтрит.');
            $this->emit('todoDeleted');
        }
    }

    public function render()
    {
        return view('livewire.delete-todo');
    }
}


