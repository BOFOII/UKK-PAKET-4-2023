<?php

namespace App\Frontend\Penawaran\Controllers;

use App\Frontend\Lelang\Requests\PenawaranRequest;
use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Lelang;
use Exception;
use Illuminate\View\View;

class PenawaranController extends Controller
{

  public function __construct()
  {
    $this->middleware("auth:guard")->except("show");
  }

  public function show(): View
  {
    $data = [];
    $data["form_btn_txt"] = "Submit";
    $data["lelang"] = Lelang::with("history.user")->where('slug', request()->route()->parameter("slug"))->firstOrFail();
    return view('frontend.penawaran.penawaran', $data);
  }

  public function tawar(PenawaranRequest $request)
  {
    try {
      $lelang = Lelang::where('slug', request()->route()->parameter("slug"))->firstOrFail();
      $lelang->history()->updateOrCreate([
        "id_history" => request()->route()->parameter("id"),
      ], $request->validated());
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }

  public function delete() {
    try {
      $history = History::findOrFail(request()->route()->parameter("id"));
      $history->delete();
      return back()->with("success", "Berhasil menghapus tawaran");
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }
}
