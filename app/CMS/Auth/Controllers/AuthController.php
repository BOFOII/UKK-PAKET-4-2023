<?php

namespace App\CMS\Auth\Controllers;

use App\CMS\Auth\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

  public function show() : View
  {
    return view('cms.auth.login');
  }

  public function login(LoginRequest $request)
  {
    if (Auth::guard("petugas")->attempt($request->validated())) {
      return redirect()->intended(route('view.home'))->with("success", "Berhasil login");
    }

    return back()->withErrors([
      "username" => "The provided credentials do not match our records."
    ])->onlyInput();
  }

  public function logout() {
    Auth::guard("petugas")->logout();
  }
}
