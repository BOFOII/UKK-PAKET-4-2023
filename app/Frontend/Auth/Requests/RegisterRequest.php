<?php

namespace App\Frontend\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequests extends FormRequest {

  public function authorize() : bool {
    return true;
  }

  public function rules() : array {
    return [
      "nama_lengkap" => ["string", "max:25"],
      "username" => ["string", "between:4,25", "unique:tb_masyarakat,username"],
      "password" => ["string"]
    ];
  }
}
