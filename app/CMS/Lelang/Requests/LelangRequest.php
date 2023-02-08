<?php

namespace App\CMS\Lelang\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LelangRequest extends FormRequest
{

  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    $id_barang_rules = ["required", "string"];

    $rules = [
      "id_barang" => $id_barang_rules,
    ];

    if(request()->route()->hasParameter("slug")) {
      $rules["slug"] = ["required"];
      unset($rules["id_barang"]);
    }

    return $rules;
  }
}
