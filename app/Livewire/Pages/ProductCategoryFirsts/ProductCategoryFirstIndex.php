<?php

namespace App\Livewire\Pages\ProductCategoryFirsts;

use Livewire\Component;

class ProductCategoryFirstIndex extends Component
{
  public function render()
  {
    return view('livewire.pages.product-category-firsts.product-category-first-index')
      ->title($this->title);
  }

  public string $title = 'Product Category 1';
  public string $url = '/product-category-firsts';
}
