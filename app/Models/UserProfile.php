<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
  use HasFactory;

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'phone',
    'country',
    'birthdate',
    'street',
    'city',
    'state',
    'postal_code',
    'terms',
    'image',
  ];

  protected $dates = ['birthdate'];
}
