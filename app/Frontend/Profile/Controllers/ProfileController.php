<?php

namespace App\Frontend\Profile\Controllers;

use App\Frontend\Profile\Requests\ProfileRequest;
use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller {

  public function __construct()
  {
    $this->middleware("auth:web");
  }

  public function show() : View {
    return view('frontend.profile.profile');
  }

  public function update(ProfileRequest $request) {
    try {
      $credential = Arr::except($request->validated(), "avatar");
      $user_id = Auth::guard('web')->user()->id_user;
      $user = Masyarakat::find($user_id);
      $user->update($credential);

      if($request->validated("avatar") !== null || $request->validated("avatar") != "") {
        $user->avatar()->update([
          "url" => $request->validated("avatar")
        ]);
      }

    } catch (Exception $e) {
      return back()->with("error", $e->getMessage() . " Line: " . $e->getLine() . " File: " . $e->getFile());
    }
  }
}
