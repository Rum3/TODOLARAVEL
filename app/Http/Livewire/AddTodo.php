<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TodoList;

class AddTodo extends Component
{
    public $content;

    public function store()
    {
        // dd('here');
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

