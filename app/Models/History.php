<?php

namespace App\Models;

use App\Traits\HasUniqueid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory, HasUniqueid;

    protected $table = "history_lelang";
    protected $primaryKey = "id_history";
    protected $keyType = "string";
    public $incrementing = false;

    protected $fillable = [
        "id_lelang",
        "id_barang",
        "id_user",
        "penawaran_harga"
    ];
}
