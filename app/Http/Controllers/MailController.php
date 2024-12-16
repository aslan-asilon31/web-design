<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

use Illuminate\Http\Request;

class MailController extends Controller
{

  public function index()
  {
    try {
      $data = [
        'name' => 'Umeda',
        'body' => 'Testing Kirim Email',
      ];

      Mail::to('sulaslansetiawan2@gmail.com')->send(new SendEmail($data));

      dd("Email Berhasil dikirim1.");
    } catch (\Exception $e) {
      dd("Gagal mengirim email1: " . $e->getMessage());
    }
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
