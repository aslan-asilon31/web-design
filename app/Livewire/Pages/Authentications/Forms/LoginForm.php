<?php

namespace App\Livewire\Pages\Authentications\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
  // #[Validate('required')]
  public string $username = '';

  // #[Validate('required')]
  public string $password = '';


  public function rules()
  {
    return [
      'username' => 'required|string',
      'password' => 'required|string',
    ];
  }

  public function validationAttributes()
  {
    return [
      'username' => 'Username',
      'password' => 'Password',
    ];
  }
}
