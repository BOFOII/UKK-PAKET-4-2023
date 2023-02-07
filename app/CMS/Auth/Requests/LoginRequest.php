<?php

namespace App\CMS\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      "username" => ["required", "max:25"],
      "password" => ["required"]
    ];
  }
}
