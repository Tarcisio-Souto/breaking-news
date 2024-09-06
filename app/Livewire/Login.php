<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required')]
    public $password;    

    #[Validate('required|email')]
    public $email;

    public function login()
    {        
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if(Auth::attempt($credentials))
        {
            session()->flash('message', 'Seja bem-vindo(a)');
            return $this->redirectRoute('/', navigate: true);
        }
        
        session()->flash('error', 'Credenciais incorretas');
    }   


    public function render()
    {
        return view('livewire.login');
    }
}
