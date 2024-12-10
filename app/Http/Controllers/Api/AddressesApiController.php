<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Http;

class AddressesApiController extends Controller
{

  public function getProvinces()
  {
    $response = Http::timeout(60)->get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
    return response()->json($response->json());
  }

  // Get list of regencies based on provinceId
  // public function getRegencies($provinceId)
  public function getRegencies()
  {
    // $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{$provinceId}.json");
    $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/11.json");
    return response()->json($response->json());
  }

  // Get list of districts based on regencyId
  public function getDistricts($regencyId)
  {
    // $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/{$regencyId}.json");
    $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/1103.json");
    return response()->json($response->json());
  }

  // Get list of villages based on districtId
  public function getVillages($districtId)
  {
    // $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/villages/{$districtId}.json");
    $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/villages/1103011.json");
    return response()->json($response->json());
  }
}
