<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_pelanggan',
        'tanggal_penjualan',
        'total_harga',
        'status',
    ];

    public function Pelanggan()
    {
        return $this->BelongsTo (Pelanggan::class,'id_pelanggan', 'id');
    }

    public function DetailPenjualan()
    {
        return $this->hasMany (DetailPenjualan::class,'id_penjualan', 'id');
    }
}
