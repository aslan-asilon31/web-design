<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Cart extends Model
{
  use \Illuminate\Database\Eloquent\Factories\HasFactory;
  use \Illuminate\Database\Eloquent\Concerns\HasUuids;
  use \App\Helpers\BootModel\Traits\WithMasterBootModel;

  protected $keyType = 'string';
  public $incrementing = false;
  public $timestamps = false;

  protected $fillable = [
    'user_id',
    'product_id',
    'quantity',
    'price',
    'delivery_charge',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at',
  ];

  protected static function boot()
  {
    parent::boot();
    static::creating(function ($model) {
      $model->id = Str::uuid()->toString();
    });
  }
}
