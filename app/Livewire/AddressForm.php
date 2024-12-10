<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class AddressForm extends Component
{
  public $provinces = [];
  public $selectedProvince = null;
  public $regencies = [];
  public $selectedRegency = null;

  // Memuat provinsi saat pertama kali komponen dimuat
  public function mount()
  {

    $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');

    if ($response->successful()) {
      // Ambil data JSON yang diinginkan
      $this->provinces = $response->json();
    } else {
      // Default jika request gagal
      $this->provinces = [];
    }
  }

  // Memuat provinsi dari API
  public function loadProvinces()
  {
    // $response = Http::timeout(60)->get(url('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json'));

    // $this->provinces = $response->json();
  }

  // Memuat regensi berdasarkan provinceId
  public function updatedSelectedProvince($provinceId)
  {
    $this->selectedRegency = null;  // Reset regency saat provinsi dipilih
    $response = Http::get(url("/api/regencies/{$provinceId}"));
    $this->regencies = $response->json();
  }

  public function render()
  {
    return view('livewire.address-form');
  }
}
