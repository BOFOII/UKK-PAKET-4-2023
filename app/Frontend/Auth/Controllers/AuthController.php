<?php

namespace App\Frontend\Auth\Controllers;

use App\Frontend\Auth\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

  public function showLogin() : View
  {
    return view('frontend.auth.login');
  }

  public function showRegister() {
    return view('frontend.auth.register');
  }

  public function login(LoginRequest $request)
  {
    if (Auth::guard("web")->attempt($request->validated())) {
      return "success";
    }
    return back()->withErrors([
      "username" => "The provided credentials do not match our records."
    ])->onlyInput();
  }

  public function register() {

  }

  public function logout() {
    Auth::guard("web")->logout();
  }
}
