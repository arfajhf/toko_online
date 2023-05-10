<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeWhereKondisi(Builder $query, string $kondisi): Builder
    {
        return $query->where('kondisi', $kondisi);
    }
}
