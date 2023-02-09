<?php

namespace App\CMS\Barang\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{

  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    $nama_barang_rules = ["required", "string", "max:25"];
    $tgl_rules = ["required", "date"];
    $harga_awal_rules = ["required", "string", "max:20"];
    $deskripsi_barang_rules = ["required", "string"];
    $images_rules = ["required", "string"];

    if(request()->route()->hasParameter("slug")) {
      $nama_barang_rules[0] = "nullable";
      $tgl_rules[0] = "nullable";
      $harga_awal_rules[0] = "nullable";
      $deskripsi_barang_rules[0] = "nullable";
      $images_rules[0] = "nullable";
    }

    return [
      "nama_barang" => $nama_barang_rules,
      "tgl" => $tgl_rules,
      "harga_awal" => $harga_awal_rules,
      "deskripsi_barang" => $deskripsi_barang_rules,
      "images.*" => $images_rules,
    ];
  }
}
