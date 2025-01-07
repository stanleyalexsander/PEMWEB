<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pengguna', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'hak_akses' => 'required|string',
        ]);

        User::create([
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'hak_akses' => $request->hak_akses,
        ]);

        session()->flash('data-success', 'Data pengguna berhasil ditambah!');
        return redirect()->route('pengguna');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengguna' => 'required|string',
            'email' => 'required|email',
            'hak_akses' => 'required|in:admin,petugas',
            'password' => 'nullable',
        ]);

        $user = User::findOrFail($id);
        $user->nama_pengguna = $request->nama_pengguna;
        $user->email = $request->email;
        $user->hak_akses = $request->hak_akses;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        session()->flash('data-success', 'Data pengguna berhasil diubah!');
        return redirect()->route('pengguna');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->hak_akses === 'admin') {
            $totalAdmin = User::where('hak_akses', 'admin')->count();

            if ($totalAdmin <= 1) {
                session()->flash('data-error', 'Tidak dapat menghapus pengguna karena hanya ada satu admin.');
                return redirect()->route('pengguna');
            }
        }

        $user->delete();

        session()->flash('data-success', 'Data pengguna berhasil dihapus!');
        return redirect()->route('pengguna');
    }
}
