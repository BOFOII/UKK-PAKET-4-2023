<?php

namespace App\Models;

use App\Traits\HasUniqueid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Barang extends Model
{
  use HasFactory, HasUniqueid;

  protected $table = "tb_barang";
  protected $primaryKey = "id_barang";
  protected $keyType = "string";
  public $incrementing = false;

  protected $fillable = [
    "slug",
    "nama_barang",
    "tgl",
    "harga_awal",
    "deskripsi_barang"
  ];

  public function lelang(): HasMany
  {
    return $this->hasMany(Lelang::class, "id_barang", "id_barang");
  }

  public function history(): HasMany
  {
    return $this->hasMany(History::class, "id_barang", "id_barang");
  }

  public function images() : MorphMany {
    return $this->morphMany(Image::class, "imageable");
  }
}
