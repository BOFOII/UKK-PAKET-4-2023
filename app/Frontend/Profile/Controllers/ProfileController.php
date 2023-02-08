<?php

namespace App\Frontend\Profile\Controllers;

use App\Frontend\Profile\Requests\ProfileRequest;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller {

  public function show() : View {
    return view('frontend.profile.profile');
  }

  public function update(ProfileRequest $request) {
    try {
      Auth::guard("web")->user()->update($request->validated());
    } catch (Exception $e) {
      return back()->with("error", $e->getMessage());
    }
  }
}
