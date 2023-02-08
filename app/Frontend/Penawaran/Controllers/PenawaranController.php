<?php

namespace App\Frontend\Penawaran\Controllers;

use App\Frontend\Lelang\Requests\PenawaranRequest;
use App\Http\Controllers\Controller;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PenawaranController extends Controller
{

  public function show(Request $request): View
  {
    $lelang = Lelang::where('slug', $request->route()->parameter("slug"))->firstOrFail();
    return view('frontend.penawaran.penawaran', compact('lelang'));
  }

  public function tawar(PenawaranRequest $request)
  {
    // $barang = Barang::where("slug", $request->route()->parameter("slug"));
    // $lelang = 
    // $history = Auth::guard("web")->user()->history()->firstOrCreate([
    //   "id_lelang" => $req,
    //   "id_barang",
    //   "penawaran_harga"
    // ]);
  }
}
