<?php

namespace App\CMS\Petugas\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PetugasController extends Controller {

  public function show() : View {
    return view('cms.petugas.petugas');
  }
}
