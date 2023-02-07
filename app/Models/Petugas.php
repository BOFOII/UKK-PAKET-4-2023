<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Petugas extends User
{
  use HasFactory, HasApiTokens, Notifiable;

  protected $table = "tb_petugas";
  protected $pimaryKey = "id_petugas";

  protected $fillable = [
    "nama_petugas",
    "username",
    "password",
    "id_level"
  ];

  protected $hidden = [
    "password",
  ];

  public function lelang(): HasMany
  {
    return $this->hasMany(Lelang::class, "id_petugas", "id_petugas");
  }

  public function avatar(): MorphOne
  {
    return $this->morphOne(Image::class, "imageable");
  }
}
