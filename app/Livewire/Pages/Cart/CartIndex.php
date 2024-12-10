<?php

namespace App\Livewire\Pages\Cart;

use Livewire\Component;

class CartIndex extends Component
{
  public $title;
  public $content;

  public $cart = [
    1 => [
      'name' => 'Product 1',
      'quantity' => 2,
      'price' => 100000,
      'delivery_charge' => 1000,
    ],
    2 => [
      'name' => 'Product 2',
      'quantity' => 1,
      'price' => 150000,
      'delivery_charge' => 1000,
    ]
  ];


  public function addToCart($productId)
  {
    if (isset($this->cart[$productId])) {
      $this->cart[$productId]['quantity']++;
      $operation = 'added';
    } else {
      $this->cart[$productId] = [
        'name' => 'Product ' . $productId,
        'quantity' => 1,
        'price' => 100,
      ];
      $operation = 'added';
    }

    $this->dispatch('cartUpdated', ['cart' => $this->cart, 'operation' => $operation]);
  }

  public function removeFromCart($productId)
  {
    if (isset($this->cart[$productId]) && $this->cart[$productId]['quantity'] > 1) {
      $this->cart[$productId]['quantity']--;
      $operation = 'removed';
    } elseif (isset($this->cart[$productId])) {
      unset($this->cart[$productId]);
      $operation = 'removed';
    }

    $this->dispatch('cartUpdated', $this->cart, $operation);
  }

  public function getTotalPrice()
  {
    return array_sum(array_map(function ($product) {
      return $product['quantity'] * $product['price'];
    }, $this->cart));
  }

  public function getTotalWithDelivery()
  {
    return $this->getTotalPrice() + $this->getTotalDeliveryCharge();
  }

  public function getTotalDeliveryCharge()
  {
    // Mengambil nilai 'delivery_charge' dari setiap item di keranjang
    return array_sum(array_column($this->cart, 'delivery_charge'));
  }




  public function save()
  {
    $this->dispatch('dataSaved', $this->title);
  }


  public function render()
  {
    return view('livewire.pages.cart.cart-index');
  }
}
