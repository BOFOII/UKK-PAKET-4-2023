<?php

namespace App\Frontend\Lelang\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LelangRequest extends FormRequest {

  public function authorize() : bool {
    return true;
  }

  public function rules() : array {
    return [];
  }
}
