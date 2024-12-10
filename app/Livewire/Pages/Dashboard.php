<?php

namespace App\Livewire\Pages;

use App\Livewire\Pages\Marketplaces\Forms\MarketplaceForm;
use Livewire\Component;

class Dashboard extends Component
{
  public $tes;
  public function cek()
  {
    $this->tes = "cekkk";
  }
  public function cekt()
  {
    $this->dispatchBrowserEvent('swal', [
      'title' => 'Feedback Saved',
      'timer' => 3000,
      'icon' => 'success',
      'toast' => true,
      'position' => 'top-right'
    ]);
  }

  public function render()
  {
    return view('livewire.pages.dashboard')
      ->title("Dashboard");
  }

  public string $title = 'Dashboard';
}
