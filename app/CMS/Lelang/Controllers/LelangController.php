<?php

namespace App\CMS\Lelang\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lelang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LelangController extends Controller
{

  public function show(): View
  {
    $data = [];
    $data["form_action"] = "";
    $data["form_btn_txt"] = "Submit";
    $data["lelangs"] = Lelang::all();
    
    if(request()->route()->hasParameter("slug")) {
      $data["form_action"] = "";
      $data["form_btn_txt"] = "Update";
      $data["lelang_detail"] = Lelang::where("slug", request()->route()->parameter("slug"))->firstOrFail();
    }

    return view("cms.lelang.lelang", $data);
  }

  public function create()
  {
  }

  public function update()
  {
  }

  public function delete()
  {
    try {
      Lelang::where("slug", request()->route()->parameter("slug"))->delete();
      return back()->with("success", "Berhasil menghapus data petugas");
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }
}
