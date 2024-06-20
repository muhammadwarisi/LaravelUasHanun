<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cabang extends Model
{
    use HasFactory;
    protected $table = 'cabang';

    // public function kopi(): HasMany{
    //     return $this->hasMany(Kopi::class, 'cabang_toko');
    // }
}
