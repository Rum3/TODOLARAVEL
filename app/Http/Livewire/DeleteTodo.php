<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoList; // Import the Todo model

class DeleteTodo extends Component
{
    public $todoId; // Property to hold the todo ID

    public function deleteTodo()
    {
        $todo = TodoList::find($this->todoId);
        
        if ($todo) {
            $todo->delete();
            session()->flash('message', 'Todo успешно изтрит.');
            $this->emit('todoDeleted'); // Emit event to refresh the list
        }
    }

    public function render()
    {
        return view('livewire.delete-todo');
    }
}


