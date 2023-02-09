<?php

namespace App\CMS\Masyarakat\Controllers;

use App\CMS\Masyarakat\Requests\MasyarakatRequest;
use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class MasyarakatController extends Controller {

  public function show() : View {
    $data = [];
    $data["form_action"] = "";
    $data["form_btn_txt"] = "Submit";
    $data["users"] = Masyarakat::all();

    if(request()->route()->hasParameter("id")) {
      $data["form_action"] = "";
      $data["form_btn_txt"] = "Update";
      $data["user_detail"] = Masyarakat::findOrFail(request()->route()->parameter("id"));
    }

    return view('cms.masyarakat.masyarakat', $data);
  }

  public function create(MasyarakatRequest $request) {
    $credential = Arr::except($request->validated(), "avatar");
    $masyarakat = Masyarakat::create($credential);
    $masyarakat->avatar()->create([
      "url" => $request->validated("avatar")
    ]);
  }

  public function update(MasyarakatRequest $request) {
    $credential = Arr::except($request->validated(), "avatar");
    $masyarakat = Masyarakat::findOrFail(request()->route()->parameter("id"));
    $masyarakat->update(array_filter($credential));

    if($request->validated("avatar") !== null || $request->validated("avatar") !== "") {
      // UPDATE AVATAR
    }
  }

  public function delete() {
    try {
      Masyarakat::find(request()->route()->parameter("id"))->delete();
      return back()->with("success", "Berhasil menghapus data masyarakat");
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }
}
