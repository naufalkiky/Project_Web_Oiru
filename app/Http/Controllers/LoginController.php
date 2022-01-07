<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // authentikasi user
        if (Auth::attempt($user)) {
            // login berhasil
            if (Auth::user()->isAdmin == false) {
                return redirect(RouteServiceProvider::HOME)->with('success', 'Selamat datang kembali '. Auth::user()->name .'!');
            } else {
                return redirect('admin/dashboard');
            }
        }
        // jika user tidak ditemukan
        throw ValidationValidationException::withMessages([
            'email' => 'Username yang anda masukkan salah',
            'password' => 'Password yang anda masukkan salah',
        ]);
    }
}
