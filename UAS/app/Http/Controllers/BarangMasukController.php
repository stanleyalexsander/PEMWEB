<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangData = Barang::all();
        $barangMasukData = BarangMasuk::all();

        return view('barang-masuk', compact('barangMasukData', 'barangData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'kategori_barang' => 'required|string',
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'sumber_barang' => 'required|string',
        ]);

        $barang = Barang::firstOrCreate(
            ['kode_barang' => $request->kode_barang],
            [
                'nama_barang' => $request->nama_barang,
                'kategori_barang' => $request->kategori_barang,
                'stok' => 0,
            ]
        );

        BarangMasuk::create([
            'kode_barang' => $request->kode_barang,
            'jumlah_masuk' => $request->jumlah_masuk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'sumber_barang' => $request->sumber_barang,
        ]);

        $barang->stok += $request->jumlah_masuk;
        $barang->save();

        session()->flash('data-success', 'Data barang masuk berhasil ditambah!');
        return redirect()->route('barang-masuk');
    }


    public function update(Request $request, $id_masuk)
    {
        $request->validate([
            'kode_barang' => 'required|exists:barangs,kode_barang',
            'jumlah_masuk' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'sumber_barang' => 'required|string',
        ]);

        $barangMasuk = BarangMasuk::findOrFail($id_masuk);
        $barang = Barang::where('kode_barang', $barangMasuk->kode_barang)->first();
        $selisih = $request->jumlah_masuk - $barangMasuk->jumlah_masuk;
        $barang->stok += $selisih;
        $barang->save();

        $barangMasuk->update([
            'kode_barang' => $request->kode_barang,
            'jumlah_masuk' => $request->jumlah_masuk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'sumber_barang' => $request->sumber_barang,
        ]);

        session()->flash('data-success', 'Data barang masuk berhasil diubah!');
        return redirect()->route('barang-masuk');
    }

    public function destroy($id_masuk)
    {
        $barangMasuk = BarangMasuk::findOrFail($id_masuk);
        $barang = Barang::where('kode_barang', $barangMasuk->kode_barang)->first();

        if ($barang) {
            $barang->stok -= $barangMasuk->jumlah_masuk;
            $barang->save();
        }

        $barangMasuk->delete();

        session()->flash('data-success', 'Data barang berhasil dihapus!');
        return redirect()->route('barang-masuk');
    }
}
