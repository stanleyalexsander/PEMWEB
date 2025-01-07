<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuks';
    protected $primaryKey = 'id_masuk';

    protected $fillable = [
        'kode_barang',
        'jumlah_masuk',
        'tanggal_masuk',
        'sumber_barang',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
