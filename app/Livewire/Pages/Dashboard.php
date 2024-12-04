<?php

namespace App\Livewire\Pages;

use App\Livewire\Pages\Marketplaces\Forms\MarketplaceForm;
use Livewire\Component;

class Dashboard extends Component
{
  public function render()
  {
    return view('livewire.pages.dashboard')
      ->title("Dashboard");
  }

  public string $title = 'Dashboard';
}
