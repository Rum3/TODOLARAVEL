<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthComponent extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth-component');
    }

    public function authenticate()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->regenerate();

            return redirect()->route('dashboard')
                ->with('success', 'You have successfully logged in!');
        }

        $this->addError('email', 'Your provided credentials do not match our records.');
    }
}

