<?php

use App\Http\Controllers\Api\EmployeeApiController;
use App\Http\Controllers\Api\SelectApiController;
use App\Http\Controllers\Api\AddressesApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/provinces', function () {
//   $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
//   return response()->json($response->json());
// });


Route::get('/provinces', [AddressesApiController::class, 'getProvinces']);

Route::get('/regencies/{provinceId}', [AddressesApiController::class, 'getRegencies']);
// Route::get('/regencies', [AddressesApiController::class, 'getRegencies']);
Route::get('/districts/{regencyId}', [AddressesApiController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [AddressesApiController::class, 'getVillages']);

Route::prefix('v1')->group(function () {
  Route::get('/employees/select', [EmployeeApiController::class, 'select']);

  Route::get('/select/positions', [SelectApiController::class, 'positions']);
  Route::get('/select/employees', [SelectApiController::class, 'employees']);
  Route::get('/select/product-category-seconds', [SelectApiController::class, 'productCategorySeconds']);
  Route::get('/select/product-category-firsts', [SelectApiController::class, 'productCategoryFirsts']);
  Route::get('/select/products', [SelectApiController::class, 'products']);
  Route::get('/select/meta-property-groups', [SelectApiController::class, 'metaPropertyGroups']);
  Route::get('/select/meta-properties', [SelectApiController::class, 'metaProperties']);
});
