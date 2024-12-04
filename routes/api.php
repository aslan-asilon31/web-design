<?php

use App\Http\Controllers\Api\EmployeeApiController;
use App\Http\Controllers\Api\SelectApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

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
