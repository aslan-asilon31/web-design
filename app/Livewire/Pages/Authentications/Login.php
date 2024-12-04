<?php

namespace App\Livewire\Pages\Authentications;

use App\Livewire\Pages\Authentications\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
  public function render()
  {
    return view('livewire.pages.authentications.login')
      ->layout('livewire.layouts.auth');
  }


  public function mount()
  {
    if (Auth::check()) {
      return redirect()->intended('dashboard');
    }
  }

  public LoginForm $loginForm;

  public function login()
  {
    $validatedForm = $this->loginForm->validate();

    if (Auth::attempt(['username' => $validatedForm['username'], 'password' => $validatedForm['password']])) {
      session()->regenerate();
      return redirect()->intended('dashboard');
    } else {
      $this->addError('invalid_account', 'Username atau Password salah.');
    }
  }
}
