<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan formulir login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm(){
        return view('auth.register');
    }

    /**
     * Memproses autentikasi pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke halaman yang sesuai
            return redirect()->intended(route('landing'));
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['username' => 'Username atau password salah.'])->withInput($request->only('username'));
    }

    /**
     * Logout pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home')->with('success', 'Anda telah berhasil keluar.');
    }
}
