<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Masyarakat extends User
{
  use HasFactory, HasApiTokens, Notifiable;

  protected $table = "tb_masyarakat";
  protected $primaryKey = "id_user";

  protected $fillable = [
    "nama_lengkap",
    "username",
    "password",
    "telp"
  ];

  protected $hidden = [
    "password"
  ];

  public function history(): HasMany
  {
    return $this->hasMany(History::class, "id_user", "id_user");
  }

  public function avatar(): MorphOne
  {
    return $this->morphOne(Image::class, "imageable");
  }
}
