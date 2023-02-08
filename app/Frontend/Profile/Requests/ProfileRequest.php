<?php

namespace App\Frontend\Profile\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest {

  public function authorize() : bool {
    return true;
  }

  public function rules() : array {
    return [
      "nama_lengkap" => ["required", "string", "max:25"],
      "username" => ["required", "string", "max:25"],
      "password" => ["required", "string", "max:25"],
      "telp" => ["required", "string", "max:13"]
    ];
  }
}
