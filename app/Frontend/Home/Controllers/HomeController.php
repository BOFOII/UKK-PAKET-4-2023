<?php

namespace App\Frontend\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller {

  public function show() : View {
    return view('frontend.home.home');
  }
}
