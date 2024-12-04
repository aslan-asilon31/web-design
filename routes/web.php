<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', \App\Livewire\Pages\Authentications\Login::class)->name('login');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');

  Route::get('/employees', \App\Livewire\Pages\Employees\EmployeeIndex::class);
  Route::get('/employees/create', \App\Livewire\Pages\Employees\EmployeeCrud::class);

  Route::get('/marketplaces', \App\Livewire\Pages\Marketplaces\MarketplaceIndex::class);
  Route::get('/marketplaces/create', \App\Livewire\Pages\Marketplaces\MarketplaceCrud::class)->name('marketplace.create');
  Route::get('/marketplaces/edit/{id}', \App\Livewire\Pages\Marketplaces\MarketplaceCrud::class)->name('marketplace.edit');

  Route::get('/meta-property-groups', \App\Livewire\Pages\MetaPropertyGroups\MetaPropertyGroupIndex::class);
  Route::get('/meta-property-groups/create', \App\Livewire\Pages\MetaPropertyGroups\MetaPropertyGroupCrud::class);
  Route::get('/meta-property-groups/edit/{id}', \App\Livewire\Pages\MetaPropertyGroups\MetaPropertyGroupCrud::class);

  Route::get('/meta-properties', \App\Livewire\Pages\MetaProperties\MetaPropertyIndex::class);
  Route::get('/meta-properties/create', \App\Livewire\Pages\MetaProperties\MetaPropertyCrud::class);
  Route::get('/meta-properties/edit/{id}', \App\Livewire\Pages\MetaProperties\MetaPropertyCrud::class);

  Route::get('/product-category-seconds', \App\Livewire\Pages\ProductCategorySeconds\ProductCategorySecondIndex::class);
  Route::get('/product-category-seconds/create', \App\Livewire\Pages\ProductCategorySeconds\ProductCategorySecondCrud::class);
  Route::get('/product-category-seconds/edit/{id}', \App\Livewire\Pages\ProductCategorySeconds\ProductCategorySecondCrud::class);

  Route::get('/product-category-firsts', \App\Livewire\Pages\ProductCategoryFirsts\ProductCategoryFirstIndex::class);
  Route::get('/product-category-firsts/create', \App\Livewire\Pages\ProductCategoryFirsts\ProductCategoryFirstCrud::class);
  Route::get('/product-category-firsts/edit/{id}', \App\Livewire\Pages\ProductCategoryFirsts\ProductCategoryFirstCrud::class);

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
});
