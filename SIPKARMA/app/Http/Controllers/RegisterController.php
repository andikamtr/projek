<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register', [
            'title' => 'Registrasi'
        ]);
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:10',
            'role_id' => 'required'
        ]);

        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        return redirect('/');
    }
}
