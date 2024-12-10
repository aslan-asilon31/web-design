<?php

use Illuminate\Support\Facades\Route;



Route::get('v1/', function () {
  return view('web/v1/index');
});



Route::get('v2/', function () {
  return view('web/v2/index');
});



Route::get('v3/', function () {
  return view('web/v3/index');
});



Route::get('/', \App\Livewire\Pages\Authentications\Login::class)->name('login');


// ===========================================================================================
Route::group(['middleware' => 'auth'], function () {
  Route::get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');

  Route::get('/product-category-firsts', \App\Livewire\Pages\ProductCategoryFirsts\ProductCategoryFirstIndex::class);
  Route::get('/product-category-firsts/create', \App\Livewire\Pages\ProductCategoryFirsts\ProductCategoryFirstCrud::class);
  Route::get('/product-category-firsts/edit/{id}', \App\Livewire\Pages\ProductCategoryFirsts\ProductCategoryFirstCrud::class);


  Route::get('/products', \App\Livewire\Pages\Products\ProductIndex::class);
  Route::get('/products/create', \App\Livewire\Pages\Products\ProductCrud::class);
  Route::get('/products/edit/{id}', \App\Livewire\Pages\Products\ProductCrud::class);



  Route::get('/cart', \App\Livewire\Pages\Cart\CartIndex::class);
  Route::get('/profile', \App\Livewire\UserProfileCrud::class);
});
