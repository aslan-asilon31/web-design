<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::get('v1/', function () {
  return view('web/v1/index');
});



Route::get('v2/', function () {
  return view('web/v2/index');
});



Route::get('v3/', function () {
  return view('web/v3/index');
});




// ===========================================================================================

// Route::get('/', \App\Livewire\Pages\Authentications\Login::class)->name('login');

Route::get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');


// Route::group(['middleware' => 'auth'], function () {

  // });
