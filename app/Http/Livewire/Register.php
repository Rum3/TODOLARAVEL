<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $email;
    public $role = 'user';
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.register');
    }

    public function storeTodo()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        session()->flash('success', 'You have successfully registered & logged in!');

        return redirect()->route('dashboard');
    }
}
