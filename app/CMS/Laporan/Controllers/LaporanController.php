<?php

namespace App\CMS\Laporan\Controllers;

use App\Http\Controllers\Controller;

class LaporanController extends Controller {

  public function show() {
    return view("cms.laporan.laporan");
  }
}
