<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluars';
    protected $primaryKey = 'id_keluar';

    protected $fillable = [
        'kode_barang',
        'jumlah_keluar',
        'tanggal_keluar',
        'tujuan_barang',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
