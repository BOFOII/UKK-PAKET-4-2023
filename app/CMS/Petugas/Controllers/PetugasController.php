<?php

namespace App\CMS\Petugas\Controllers;

use App\CMS\Petugas\Requests\PetugasRequest;
use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class PetugasController extends Controller {

  public function show() : View {
    $data = [];
    $data["form_action"] = "";
    $data["form_btn_txt"] = "Submit";
    $data["users"] = Petugas::all();

    if(request()->route()->hasParameter("id")) {
      $data["form_action"] = "";
      $data["form_btn_txt"] = "Update";
      $data["user_detail"] = Petugas::findOrFail(request()->route()->parameter("id"));
    }

    return view('cms.petugas.petugas', $data);
  }

  public function create(PetugasRequest $request) {
    $credential = Arr::except($request->validated(), "avatar");
    $petugas = Petugas::create($credential);
    $petugas->avatar()->create([
      "url" => $request->validated("avatar")
    ]);
  }

  public function update(PetugasRequest $request) {
    $credential = Arr::except($request->validated(), "avatar");
    $petugas = Petugas::findOrFail(request()->route()->parameter("id"));
    $petugas->update(array_filter($credential));

    if($request->validated("avatar") !== null || $request->validated("avatar") !== "") {
      // avatar update
    }
  }

  public function delete() {
    try {
      Petugas::find(request()->route()->parameter("id"))->delete();
      return back()->with("success", "Berhasil menghapus data petugas");
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }
}
