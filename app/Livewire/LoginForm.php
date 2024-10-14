<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public $username;
    public $password;
    public $errorMessage;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Aqui você implementa a lógica para verificar as credenciais
        // Simulação de login bem-sucedido ou falho
        if ($this->username === 'admin' && $this->password === 'password') {
            return redirect()->route('dashboard');
        } else {
            $this->errorMessage = 'Usuário ou senha incorretos.';
        }
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
