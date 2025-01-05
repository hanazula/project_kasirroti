<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    Protected $fillable = [
        'gambar',
        'id_produk',
        'nama_produk',
        'id_jenis',
        'harga',
        'stok',
    ];

    public function Jenis()
    {
        return $this->BelongsTo (Jenis::class, 'id_jenis', 'id');
    }

    public function DetailPenjualan()
    {
        return $this->hasMany (DetailPenjualann::class, 'id_produk', 'id');
    }
}
