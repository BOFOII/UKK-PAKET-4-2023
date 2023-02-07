<?php

namespace App\Models;

use App\Traits\HasUniqueid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lelang extends Model
{
  use HasFactory, HasUniqueid;

  protected $table = "tb_lelang";
  protected $primaryKey = "id_lelang";
  protected $keyType = "string";
  public $incrementing = false;

  protected $fillable = [
    "id_barang",
    "tgl_lelang",
    "harga_akhir",
    "id_user",
    "id_petugas",
    "status"
  ];

  public function barang(): BelongsTo
  {
    return $this->belongsTo(Barang::class, "id_barang", "id_barang");
  }

  public function user(): BelongsTo {
    return $this->belongsTo(Masyarakat::class, "id_user", "id_user");
  }

  public function petugas() : BelongsTo {
    return $this->belongsTo(Petugas::class, "id_petugas", "id_petugas");
  }

  public function history(): HasMany
  {
    return $this->hasMany(History::class, "id_lelang", "id_lelang");
  }
}
