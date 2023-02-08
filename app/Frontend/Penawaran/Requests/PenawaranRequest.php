<?php

namespace App\Frontend\Lelang\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenawaranRequest extends FormRequest {

  public function authorize() : bool {
    return true;
  }

  public function rules() : array {
    return [
      "penawaran_harga" => ["required", "integer"]
    ];
  }
}
