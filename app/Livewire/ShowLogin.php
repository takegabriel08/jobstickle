<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class ShowLogin extends Component
{
    public string $email = '';
    public string $password = '';

    public function authenticate(Request $request)
    {
        $formFields = $this->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Welcome back, ' . auth()->user()->name . '!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function render()
    {
        return view('livewire.show-login')->layout('layout');
    }
}
