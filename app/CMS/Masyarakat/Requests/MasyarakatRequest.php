<?php

namespace App\CMS\Masyarakat\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasyarakatRequest extends FormRequest
{

  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    $nama_lengkap_rules = ["required", "string", "max:25"];
    $username_rules = ["required", "string", "max:25"];
    $password_rules = ["required", "string", "max:32"];
    $telp_rules = ["required", "string", "max:13"];
    $avatar_rules = ["required", "string"];

    if (request()->route()->hasParameter("id")) {
      $nama_lengkap_rules[0] = "nullable";
      $username_rules[0] = "nullable";
      $password_rules[0] = "nullable";
      $telp_rules[0] = "nullable";
      $avatar_rules[0] = "nullable";
    }

    return [
      "nama_lengkap" => $nama_lengkap_rules,
      "username" => $username_rules,
      "password" => $password_rules,
      "telp" => $telp_rules,
      "avatar" => $avatar_rules,
    ];
  }
}
