<?php

namespace App\Livewire\Pages\ProquipHome;

use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategoryFirst;

class ProquipHomeIndex extends Component
{
  public $title = "Home";
  public $user;
  public $cart;
  public $user_id;
  public $product_id;

  public $query;
  public $productId;
  public $perPage = 10;

  public function mount()
  {
    $this->user = auth()->user();
    $this->query = request()->query('query');
  }

  public function render()
  {

    $products = Product::where('name', 'like', '%' . $this->query . '%')
      ->paginate($this->perPage);

    $productFirst = ProductCategoryFirst::all();

    $carts = Cart::where('user_id', $this->user->id)->pluck('product_id')->toArray();

    foreach ($products as $product) {

      $product->in_cart = in_array($product->id, $carts);
    }

    $productListDropdowns = Product::all();

    return view('livewire.pages.produip-home.proquip-home-index', [
      'products' => $products,
      'productFirst' => $productFirst
    ])
      ->layout('components.layouts.app_landing', [
        'productListDropdowns' => $productListDropdowns
      ])
      ->title($this->title);
  }
}
