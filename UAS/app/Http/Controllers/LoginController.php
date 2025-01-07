<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            session()->flash('login-success', 'Login berhasil!');

            if ($user->hak_akses === 'admin') {
                return redirect()->route('dashboard');
            } elseif ($user->hak_akses === 'petugas') {
                return redirect()->route('barang-masuk');
            }
        }

        session()->flash('login-error', 'Email atau password salah.');
        return back();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
