<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductFilterIndex extends Component
{
  use WithPagination;  // This trait enables pagination support

  public $title = "Product Filter";
  public $query; // Query search term
  public $perPage = 10; // Number of items per page

  // This method is called when the component is initialized
  public function mount()
  {
    $this->query = request()->query('query'); // Capture query parameter from the URL
  }

  // Perform the search and return paginated results
  public function render()
  {
    // Paginate the results
    $products = Product::where('name', 'like', '%' . $this->query . '%')
      ->paginate($this->perPage);

    $productListDropdowns = Product::all();

    return view('livewire.product-filter', [
      'products' => $products
    ])
      ->layout('components.layouts.app_landing', [
        'productListDropdowns' => $productListDropdowns
      ])
      ->title($this->title);
  }
}
