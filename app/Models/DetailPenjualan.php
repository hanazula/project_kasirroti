<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_penjualan',
        'id_produk',
        'harga',
        'qty',
        'subtotal',
    ];

    public function Penjualan()
    {
        return $this->BelongsTo (Penjualan::class, 'id_penjualan', 'id');
    }

    public function Produk()
    {
        return $this->belongsTo (Produk::class,'id_produk', 'id');
    }
}
