<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class DataBarangController extends Controller
{
    public function index()
    {
        $barangData = Barang::all();
        $kategoriBarang = Barang::select('kategori_barang')->distinct()->get();

        return view('data-barang', compact('barangData', 'kategoriBarang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'stok' => 'required|integer',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        session()->flash('data-success', 'Data barang berhasil diubah!');
        return redirect()->route('data-barang');
    }

    public function destroy($id)
    {
        Barang::destroy($id);

        session()->flash('data-success', 'Data barang berhasil dihapus!');
        return redirect()->route('data-barang');
    }
}
