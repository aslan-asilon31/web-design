<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('user_profiles', function (Blueprint $table) {
      $table->id();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->string('phone');
      $table->string('country');
      $table->date('birthdate');
      $table->string('street');
      $table->string('city');
      $table->string('state');
      $table->string('postal_code');
      $table->boolean('terms')->default(false); // untuk menyimpan checkbox terms
      $table->string('image')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user_profiles');
  }
};
