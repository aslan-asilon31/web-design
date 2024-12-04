<?php

namespace App\Livewire\Pages\ProductContents;

use Livewire\Component;

class ProductContentIndex extends Component
{
  public function render()
  {
    return view('livewire.pages.product-contents.product-content-index')
      ->title($this->title);
  }

  public string $title = 'Product Content';
  public string $url = '/product-contents';
}
