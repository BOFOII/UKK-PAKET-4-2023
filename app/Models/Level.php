<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    protected $table = "tb_level";
    protected $primaryKey = "id_level";

    protected $fillable = [
        "level"
    ];

    public function petugas() : HasMany {
        return $this->hasMany(Petugas::class, "id_level", "id_level");
    }
}
