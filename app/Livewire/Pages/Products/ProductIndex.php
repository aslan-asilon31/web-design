<?php

namespace App\Livewire\Pages\Products;

use Livewire\Component;

class ProductIndex extends Component
{
  public function render()
  {
    return view('livewire.pages.products.product-index')
      ->title($this->title);
  }
  public string $title = 'Product';
  public string $url = '/products';
}
