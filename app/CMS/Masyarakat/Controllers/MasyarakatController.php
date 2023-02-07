<?php

namespace App\CMS\Masyarakat\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MasyarakatController extends Controller {

  public function show() : View {
    return view('cms.masyarakat.masyarakat');
  }
}
