<?php

namespace App\Frontend\Auth\Controllers;

use App\Frontend\Auth\Requests\LoginRequest;
use App\Frontend\Auth\Requests\RegisterRequests;
use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

  public function __construct()
  {
    $this->middleware("guest")->except("logout");
    $this->middleware("auth:web")->only("logout");
  }

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
      return redirect()->intended("/");
    }

    return back()->withErrors([
      "username" => "The provided credentials do not match our records."
    ])->onlyInput();
  }

  public function register(RegisterRequests $request) {
    try {
      Masyarakat::create($request->validated());
      return redirect()->with("success", "Berhasil mendaftar");
    } catch(Exception $e) {
      return back()->with("error", $e->getMessage());
    }
  }

  public function logout() {
    Auth::guard("web")->logout();
    return redirect()->with("success", "Berhasil logout");
  }
}
