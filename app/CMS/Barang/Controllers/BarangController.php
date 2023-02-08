<?php

namespace App\CMS\Barang\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BarangController extends Controller {

  public function show() : View {
    return view('cms.barang.barang');
  }

  public function create() {
    
  }

  public function update() {

  }

  public function delete() {

  }
}
