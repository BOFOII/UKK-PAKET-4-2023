<?php

namespace App\Frontend\Profile\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProfileController extends Controller {

  public function show() : View {
    return view('frontend.profile.profile');
  }
}
