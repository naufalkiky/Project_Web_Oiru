<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserDashboardController extends Controller
{
    public function index($id)
    {
        $users = User::where('id', $id)->get();
        return view('users.dashboard', [
            'users' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        if (!$request->password == null) {
            User::where('id', $id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
                'password' => Hash::make($request->password),
            ]);
        } else {
            User::where('id', $id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
            ]);
        }

        return redirect()->back()->with('success', 'Profil anda berhasil diperbarui');
    }
}
