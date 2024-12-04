<?php

namespace App\Livewire\Partials;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Header extends Component
{

  public $user = null;

  public function mount()
  {
    $this->user = auth()->user()->with(['employee:id,name,position_id', 'employee.position:id,name'])->first();
  }

  public function render()
  {
    return view('livewire.partials.header');
  }

  public function logout()
  {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
  }
}
