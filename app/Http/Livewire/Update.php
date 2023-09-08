<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoList;

class Update extends Component
{
    public $todolistId;
    public $content;

    public function updateTodoList()
    {
        $todolist = TodoList::findOrFail($this->todolistId);
        $todolist->content = $this->content;
        $todolist->save();

        session()->flash('success', 'Задачата е успешно променета.');

        $this->emit('todolistUpdated');
    }

    public function render()
    {
        return view('livewire.update');
    }
}

