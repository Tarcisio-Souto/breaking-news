<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        Auth::logout();

        session()->flash('message', 'Você foi deslogado.');
        return $this->redirectRoute('login', navigate: true);
    }

    public function render()
    {
        Auth::logout();
        return view('livewire.login');
    }
}
