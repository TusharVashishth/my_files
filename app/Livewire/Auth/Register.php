<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Hash;


class Register extends Component
{
    #[Title('Register')]
    #[Layout('components.layouts.auth')]

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $validate = $this->validate([
            "name" => "required|min:2|max:30",
            "email" => 'required|min:2|max:30|unique:users,email',
            'password' => 'required|min:6|max:30|confirmed'
        ]);

        $validate["password"] = Hash::make($validate["password"]);
        User::create($validate);
        session()->flash('success', "Account created successfully!");
        $this->redirect("/login", navigate: true);
    }
}
