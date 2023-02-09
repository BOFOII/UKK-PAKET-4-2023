<?php

namespace App\CMS\Barang\Controllers;

use App\CMS\Barang\Requests\BarangRequest;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class BarangController extends Controller
{

  public function show(): View
  {
    $data = [];
    $data["form_action"] = "";
    $data["form_btn_txt"] = "Submit";
    $data["items"] = Barang::all();

    if (request()->route()->hasParameter("id")) {
      $data["form_action"] = "";
      $data["form_btn_txt"] = "Update";
      $data["item_detail"] = Barang::findOrFail(request()->route()->parameter("id"));
    }

    return view('cms.barang.barang', $data);
  }

  public function create(BarangRequest $request)
  {
    $credential = Arr::except($request->validated(), "images");
    $barang = Barang::create($credential);

    foreach ($request->validated('images') as $url) {
      $barang->images()->create([
        "url" => $url
      ]);
    }
  }

  public function update(BarangRequest $request)
  {
  }

  public function delete()
  {
    try {
      Barang::find(request()->route()->parameter("id"))->delete();
      return back()->with("success", "Berhasil menghapus data barang");
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }
}
