<?php

namespace App\Http\Controllers;

use App\Models\Jelantah;
use App\Models\GroceriesTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserDashboardController extends Controller
{
    public function index()
    {
        $users = User::where('id', Auth::user()->id)->get();
        $Total_Jelantah = Jelantah::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(4);
        
        return view('users.dashboard', [
            'users' => $users,
            'Total_Jelantah' => $Total_Jelantah
        ]);
    }

    public function profil(Request $request)
    {
        $request->validate([
            'name' => ['min:3'],
            'email' => ['email', Rule::unique('users')->ignore(Auth::user()->id)],
            'address' => ['min:8'],
            'password' => [Rule::when($request->password != null, ['min:3'], [''])],
        ]);

        if (!$request->password == null) {
            User::where('id', Auth::user()->id)->update([
                'email' => $request->email,
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
                'password' => Hash::make($request->password),
            ]);
        } else {
            User::where('id', Auth::user()->id)->update([
                'email' => $request->email,
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
            ]);
        }

        return redirect()->back()->with('success', 'Profil anda berhasil diperbarui');
    }

    public function detail($id)
    {
        $Total_Jelantah = Jelantah::where('id', $id)->get();

        foreach ($Total_Jelantah as $jelantah) {
            if ($jelantah->user_id === Auth::user()->id) {
                return view('users.detail_penukaran_sampah', [
                    'Total_Jelantah' => $Total_Jelantah,
                ]);
            } else {
                return abort(404);
            }
        }
    }

    public function status()
    {
        $groceries_transactions = GroceriesTransaction::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);

            return view('users.status_penukaran_sembako', [
                'groceries_transactions' => $groceries_transactions
            ]);
    }

    public function update($id)
    {
        $success = 'Berhasil';
        GroceriesTransaction::where('id', $id)->update([
            'status' => $success
        ]);

        return back()->with('success', 'Pesanan sudah diterima, terima kasih!');
    }
}
