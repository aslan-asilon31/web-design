<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SelectApiController extends Controller
{

  protected function selectQuery($model, $request, $sortField = 'name', $sortDirection = 'asc')
  {
    $records = $model::query()
      ->select('id', 'name')
      ->when(
        $request->search,
        fn(Builder $query) => $query
          ->where('name', 'like', "%{$request->search}%")
      )
      ->when(
        $request->exists('selected'),
        fn(Builder $query) => $query->whereIn('id', $request->input('selected', [])),
        fn(Builder $query) => $query->limit(50)
      )
      ->orderBy($sortField, $sortDirection)
      ->get();

    return $records;
  }

  public function metaPropertyGroups(Request $request)
  {

    $records = $this->selectQuery(
      \App\Models\MetaPropertyGroup::class,
      $request
    );

    return response()->json($records);
  }

  public function metaProperties(Request $request)
  {
    $records = $this->selectQuery(
      \App\Models\MetaProperty::class,
      $request,
      'ordinal'
    );

    return response()->json($records);
  }

  public function productCategorySeconds(Request $request)
  {

    $records = $this->selectQuery(
      \App\Models\ProductCategorySecond::class,
      $request
    );

    return response()->json($records);
  }

  public function productCategoryFirsts(Request $request)
  {

    $records = $this->selectQuery(
      \App\Models\ProductCategoryFirst::class,
      $request
    );

    return response()->json($records);
  }

  public function products(Request $request)
  {

    $records = $this->selectQuery(
      \App\Models\Product::class,
      $request
    );

    return response()->json($records);
  }

  public function positions(Request $request)
  {
    $records = $this->selectQuery(
      \App\Models\Position::class,
      $request
    );

    return response()->json($records);
  }

  public function employees(Request $request)
  {
    $records = $this->selectQuery(
      \App\Models\Employee::class,
      $request
    );

    return response()->json($records);
  }
}
