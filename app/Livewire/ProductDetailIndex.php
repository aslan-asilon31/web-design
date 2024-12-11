<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;


class ProductDetailIndex extends Component
{
  public $title = "Product Detail";

  public function amount() {}

  public function render()
  {

    $productListDropdowns = Product::all();

    return view('livewire.product-detail')
      ->layout('components.layouts.app_landing', [
        'productListDropdowns' => $productListDropdowns
      ])
      ->title($this->title);
  }
}
