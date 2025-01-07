<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\Barang;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barangData = Barang::all();
        $barangKeluarData = BarangKeluar::all();

        return view('barang-keluar', compact('barangKeluarData', 'barangData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string',
            'jumlah_keluar' => 'required|integer|min:1',
            'tanggal_keluar' => 'required|date',
            'tujuan_barang' => 'required|string',
        ]);

        $barang = Barang::where('kode_barang', $request->kode_barang)->first();

        if ($barang->stok < $request->jumlah_keluar) {
            session()->flash('data-error', 'Data barang keluar gagal ditambah!');
            return back();
        }

        BarangKeluar::create([
            'kode_barang' => $request->kode_barang,
            'jumlah_keluar' => $request->jumlah_keluar,
            'tanggal_keluar' => $request->tanggal_keluar,
            'tujuan_barang' => $request->tujuan_barang,
        ]);

        $barang->stok -= $request->jumlah_keluar;
        $barang->save();

        session()->flash('data-success', 'Data barang keluar berhasil ditambah!');
        return redirect()->route('barang-keluar');
    }

    public function update(Request $request, $id_keluar)
    {
        $request->validate([
            'kode_barang' => 'required|exists:barangs,kode_barang',
            'jumlah_keluar' => 'required|integer|min:1',
            'tanggal_keluar' => 'required|date',
            'tujuan_barang' => 'required|string',
        ]);

        $barangKeluar = BarangKeluar::findOrFail($id_keluar);
        $barang = Barang::where('kode_barang', $barangKeluar->kode_barang)->first();
        $selisih = $request->jumlah_keluar - $barangKeluar->jumlah_keluar;

        if ($selisih > 0 && $barang->stok < $selisih) {
            session()->flash('data-error', 'Data barang keluar gagal diubah!');
            return back();
        }

        $barang->stok -= $selisih;
        $barang->save();

        $barangKeluar->update([
            'kode_barang' => $request->kode_barang,
            'jumlah_keluar' => $request->jumlah_keluar,
            'tanggal_keluar' => $request->tanggal_keluar,
            'tujuan_barang' => $request->tujuan_barang,
        ]);

        session()->flash('data-success', 'Data barang keluar berhasil diubah!');
        return redirect()->route('barang-keluar');
    }

    public function destroy($id_keluar)
    {
        $barangKeluar = BarangKeluar::findOrFail($id_keluar);
        $barang = Barang::where('kode_barang', $barangKeluar->kode_barang)->first();

        if ($barang) {
            $barang->stok += $barangKeluar->jumlah_keluar;
            $barang->save();
        }

        $barangKeluar->delete();

        session()->flash('data-success', 'Data barang keluar berhasil dihapus!');
        return redirect()->route('barang-keluar');
    }

    public function getBarangData($kode_barang)
    {
        $barang = Barang::where('kode_barang', $kode_barang)->first();
        if ($barang) {
            return response()->json([
                'nama_barang' => $barang->nama_barang,
                'kategori_barang' => $barang->kategori_barang,
            ]);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
    }
}
