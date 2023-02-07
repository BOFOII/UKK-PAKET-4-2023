<?php

namespace App\CMS\Lelang\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class LelangController extends Controller {

  public function show() : View {
    return view("cms.lelang.lelang");
  }
}
