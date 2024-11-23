<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $title = "Login";

        return view('auth.login', compact('title'));
    }

    public function authLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Username atau password anda salah!');
    }

    public function register()
    {
        $title = "Registrasi";

        return view('auth.register', compact('title'));
    }

    public function authRegister(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
        ]);

        User::create($credentials);

        return redirect('login')->with('success', 'Berhasil Registrasi');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
