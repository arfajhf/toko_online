<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Data_pemesanan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pemesanan()
    {
        return $this->belongsTo(Data_barang::class, 'id_barang', 'id');
    }
}
