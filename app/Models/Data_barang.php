<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_barang extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function barang()
    {
        return $this->hasMany(app('App\Models\Data_pemesanan'));
    }
}
