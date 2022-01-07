<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validasi form registrasi
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'unique:users', 'email'],
            'no_hp' => ['required'],
            'address' => ['required'],
            'password' => ['required', 'min:5'],
        ]);

        // mendaftarkan user ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('success', 'Selamat datang di BarterBage, Anda sudah terdaftar!');
    }
}
