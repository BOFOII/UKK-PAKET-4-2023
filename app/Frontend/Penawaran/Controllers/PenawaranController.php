<?php

namespace App\Frontend\Penawaran\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PenawaranController extends Controller {

  public function show(Request $request) : View {
    return view('frontend.penawaran.penawaran');
  }
}
