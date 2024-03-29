<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageUploadRequest extends FormRequest {

  public function autorize() : bool {
    return true;
  }

  public function rules() : array {
    return [
      "file" => ["array", "image"]
    ];
  }
}
