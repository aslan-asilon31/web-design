<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', \App\Livewire\Pages\Authentications\Login::class)->name('login');

Route::get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');

Route::get('/post', \App\Livewire\PostCrud::class);
Route::get('/products', \App\Livewire\Pages\Products\ProductIndex::class);
Route::get('/products/create', \App\Livewire\Pages\Products\ProductCrud::class);
Route::get('/products/edit/{id}', \App\Livewire\Pages\Products\ProductCrud::class);

Route::get('/products', \App\Livewire\Pages\Products\ProductIndex::class);
Route::get('/product-contents', \App\Livewire\Pages\ProductContents\ProductContentIndex::class);
Route::get('/product-contents/create', \App\Livewire\Pages\ProductContents\ProductContentCrud::class);
Route::get('/product-contents/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentCrud::class);
Route::get('/product-content-metas/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentMetaCrud::class);
Route::get('/product-content-displays/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentDisplayCrud::class);
Route::get('/product-content-videos/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentVideoCrud::class);
Route::get('/product-content-specifications/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentSpecificationCrud::class);
Route::get('/product-content-features/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentFeatureCrud::class);
Route::get('/product-content-qnas/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentQnaCrud::class);
Route::get('/product-content-reviews/edit/{id}', \App\Livewire\Pages\ProductContents\ProductContentReviewCrud::class);



// Route::group(['middleware' => 'auth'], function () {

  // });
