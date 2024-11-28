<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Method untuk menampilkan form login
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi data login
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Arahkan ke halaman admin setelah login berhasil
            return redirect()->intended('/admin');
        }
    
        // Kembalikan ke halaman login dengan pesan kesalahan jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    


    // Method untuk logout
    public function logout(Request $request)
    {
        Auth::logout(); // Pastikan menggunakan Auth::logout() secara eksplisit

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
