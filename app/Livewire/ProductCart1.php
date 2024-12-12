<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ProductCart1 extends Component
{
  public $counts = [];

  public function render()
  {
    return view('livewire.product-cart1');
  }

  public function addCount()
  {
    $this->counts[] = 0;
  }

  public function increment($index)
  {
    $this->counts[$index]++;
  }

  public function decrement($index)
  {
    $this->counts[$index]--;
  }

  public function save()
  {
    dd('simpaan');
    // Simpan data ke dalam database
    DB::table('product_carts')->insert([
      'counts' => json_encode($this->counts),
    ]);

    session()->flash('message', 'Data berhasil disimpan!');
  }
}
