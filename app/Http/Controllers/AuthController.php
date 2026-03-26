<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // halaman login
    public function login()
    {
        // kalau sudah login ke dashboard
        if (session('login')) {
            return redirect('/dashboard');
        }

        return view('login');
    }

    // proses login
    public function prosesLogin(Request $request)
    {
        if ($request->username == 'admin' && $request->password == '123') {
            session(['login' => true]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal!');
    }

    // dashboard
    public function dashboard()
    {
        // kalau belum login → ke login
        if (!session('login')) {
            return redirect('/');
        }

        return view('dashboard');
    }

    // logout
    public function logout()
    {
        session()->forget('login');
        return redirect('/');
    }
}