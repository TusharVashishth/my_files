<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Title('Login')]
    #[Layout('components.layouts.auth')]
    public $email = '';
    public $password = '';
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $credentials = $this->validate([
            "email" => 'required|min:2|max:30',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            session()->flash("success", "Logged in successfully!");
            return $this->redirectRoute("dashboard", navigate: true);
        }
        return $this->addError('email', "The provided credentials do not match our records");

    }


}
