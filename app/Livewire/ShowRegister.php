<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ShowRegister extends Component
{

    public $first_name, $last_name, $email, $password, $password_confirmation, $terms;

    public function createUser()
    {
        $formFields = $this->validate([
            'first_name' => ['required', 'min:3', 'max:35'],
            'last_name' => ['required', 'min:3', 'max:35'],
            'email' => ['required', 'email', Rule::unique("users", "email")],
            'password' => ['required', 'confirmed', 'min:6'],
            'terms' => ['required', 'accepted'],
        ]);

        $formFields['name'] = $formFields['first_name'] . ' ' . $formFields['last_name'];

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/')->with('success', 'User ' . $formFields['first_name'] . ' ' . $formFields['last_name']  . ' created and logged in!');
    }
    public function render()
    {
        return view('livewire.show-register')->layout('layout');
    }
}
