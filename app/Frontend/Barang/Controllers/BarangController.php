<?php

namespace App\Frontend\Barang\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BarangController extends Controller {

  public function show() : View {
    return view('frontend.barang.barang');
  }
}
