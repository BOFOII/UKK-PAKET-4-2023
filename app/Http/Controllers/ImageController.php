<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller {

  public function upload(Request $request) {
    $store = $request->file('file')->store('images', 'public');
    $url = Storage::disk('public')->url($store);
    return response()->json([
      "url" => $url
    ]);
  }
}
