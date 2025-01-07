<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $barangTersedia = Barang::where('stok', '>', 0)
            ->orderBy('stok', 'desc')
            ->get();

        $hampirHabis = Barang::where('stok', '<=', 20)
            ->orderBy('stok', 'asc')
            ->get();

        $labelBarangTersedia = $barangTersedia->pluck('nama_barang');
        $stokBarangTersedia = $barangTersedia->pluck('stok');

        $labelHampirHabis = $hampirHabis->pluck('nama_barang');
        $stokHampirHabis = $hampirHabis->pluck('stok');

        $barangMasukData = DB::table('barang_masuks')
            ->join('barangs', 'barang_masuks.kode_barang', '=', 'barangs.kode_barang')
            ->select(
                'barangs.kode_barang',
                'barangs.nama_barang',
                DB::raw('barang_masuks.jumlah_masuk as stok'),
                'barang_masuks.tanggal_masuk as tanggal',
                DB::raw('"Barang masuk" as keterangan')
            )
            ->get();

        $barangKeluarData = DB::table('barang_keluars')
            ->join('barangs', 'barang_keluars.kode_barang', '=', 'barangs.kode_barang')
            ->select(
                'barangs.kode_barang',
                'barangs.nama_barang',
                DB::raw('barang_keluars.jumlah_keluar as stok'),
                'barang_keluars.tanggal_keluar as tanggal',
                DB::raw('"Barang keluar" as keterangan')
            )
            ->get();

        $barangData = $barangMasukData->merge($barangKeluarData)->sortByDesc('tanggal');

        return view('dashboard', compact(
            'barangData',
            'labelBarangTersedia',
            'stokBarangTersedia',
            'labelHampirHabis',
            'stokHampirHabis'
        ));
    }
}
