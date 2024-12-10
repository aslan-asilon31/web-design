<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class UserProfileCrud extends Component
{
  use WithFileUploads;
  public $countries = ['USA', 'Canada', 'UK'];
  public $image;
  public $file;

  public $form = [
    'first_name' => '',
    'provinces' => '',
    'image' => null,
    'file' => null,
    'provinces' => '',
  ];

  protected $rules = [
    'form.file' => 'nullable|file|max:10240',  // Maksimal 10MB tanpa membatasi tipe file
    'form.image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240', // Validasi image jika ada
  ];

  public $provinces = [];
  public $selectedProvince = null;
  public $regencies = [];

  public function mount()
  {
    $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');

    if ($response->successful()) {
      $this->provinces = $response->json();
    }
  }

  public function save()
  {
    $this->validate([
      'form.first_name' => 'required|string|max:255',
      'form.provinces' => 'required|string|max:255',
      'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
      'file' => 'nullable|mimes:pdf,docx',
    ]);

    // Menyimpan data UserProfile
    $userProfile = UserProfile::create([
      'first_name' => $this->form['first_name'],
      'provinces' => $this->form['provinces'],
      'file' => $this->storeFile(),
      'image' => $this->storeImage(),
    ]);

    session()->flash('message', 'Profile has been saved successfully!');

    // Reset form setelah menyimpan
    $this->reset('form');
  }


  public function updatedSelectedProvince($provinceId)
  {
    // Triggered when province is selected
    $this->loadRegencies($provinceId);
  }

  public function loadRegencies($provinceId)
  {
    // Load regencies based on selected province
    $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{$provinceId}.json");
    if ($response->successful()) {
      $this->regencies = $response->json();
    }
  }


  // Fungsi untuk menyimpan gambar
  protected function storeImage()
  {
    if ($this->form['image']) {
      $imagePath = $this->form['image']->store('public/images');
      return basename($imagePath); // Mengembalikan nama file gambar
    }

    return null;
  }

  // Fungsi untuk menyimpan file
  protected function storeFile()
  {
    if ($this->form['file']) {
      $filePath = $this->form['file']->store('public/files');
      return basename($filePath); // Mengembalikan nama file file
    }
    return null;
  }

  public function render()
  {
    return view('livewire.user-profile-crud');
  }
}
