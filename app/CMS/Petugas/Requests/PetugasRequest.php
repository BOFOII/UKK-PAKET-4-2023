<?php

namespace App\CMS\Petugas\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetugasRequest extends FormRequest
{

  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    $nama_petugas_rules = ["required", "string", "max:25"];
    $username_rules = ["required", "string", "max:25"];
    $password_rules = ["required", "string", "max:32"];
    $id_level_rules = ["required", "integer"];
    $avatar_rules = ["required", "string"];
    
    if (request()->route()->hasParameter("id")) {
      $nama_petugas_rules[0] = "nullable";
      $username_rules[0] = "nullable";
      $password_rules[0] = "nullable";
      $id_level_rules[0] = "nullable";
      $avatar_rules[0] = "nullable";
    }

    return [
      "nama_petugas" => $nama_petugas_rules,
      "username" => $username_rules,
      "password" => $password_rules,
      "id_level" => $id_level_rules,
      "avatar" => $avatar_rules,
    ];
  }
}
