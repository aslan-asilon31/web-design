<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cart;
use App\Models\Product;
use Auth;


class ProductFilterIndex extends Component
{
  use WithPagination;  // This trait enables pagination support

  public $title = "Product Filter";
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

  public function addCount()
  {
    $this->counts[] = 0;
  }

  public function filterAddToCart($productId)
  {
    $product = Product::find($productId);

    $cart = Cart::where('user_id', $this->user->id)
      ->where('product_id', $productId)
      ->first();


    if ($cart) {
      $this->js("alert('Produk sudah ada di keranjang!')");
      return response()->json(['message' => 'Produk sudah ada di keranjang'], 200);
    } else {
      $cart = Cart::create([
        'user_id' => $this->user->id,
        'product_id' => $productId,
      ]);
      return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang'], 201);
    }
    $this->js("alert('Produk berhasil ditambahkan ke keranjang!')");
  }

  public function filterRemoveFromCart($productId)
  {
    $product = Product::find($productId);

    $cart = Cart::where('user_id', $this->user->id)
      ->where('product_id', $productId)
      ->first();

    if ($cart) {
      $cart->delete();
      return response()->json(['message' => 'Produk berhasil dihapus dari keranjang'], 200);
    } else {
      $this->js("alert('Produk tidak ada di keranjang!')");
      return response()->json(['message' => 'Produk tidak ada di keranjang'], 404);
    }
  }

  public function save()
  {
    Cart::create([
      'user_id' => $this->user_id,
      'product_id' => $this->product_id,
    ]);

    $this->redirect('/posts');
  }

  // Perform the search and return paginated results
  public function render()
  {
    $products = Product::where('name', 'like', '%' . $this->query . '%')
      ->paginate($this->perPage);

    $carts = Cart::where('user_id', $this->user->id)->pluck('product_id')->toArray();

    foreach ($products as $product) {

      $product->in_cart = in_array($product->id, $carts);
    }

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
