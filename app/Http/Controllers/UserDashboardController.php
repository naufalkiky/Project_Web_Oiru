<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use App\Models\GroceriesTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDashboardController extends Controller
{
    public function index()
    {
        $users = User::where('id', Auth::user()->id)->get();
        $garbages = Garbage::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(5);
        
        return view('users.dashboard', [
            'users' => $users,
            'garbages' => $garbages
        ]);
    }

    public function profil(Request $request)
    {
        if (!$request->password == null) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
                'password' => Hash::make($request->password),
            ]);
        } else {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'address' => $request->address,
            ]);
        }

        return redirect()->back()->with('success', 'Profil anda berhasil diperbarui');
    }

    public function detail($id)
    {
        $garbages = Garbage::where('id', $id)->get();

        foreach ($garbages as $garbage) {
            if ($garbage->user_id === Auth::user()->id) {
                return view('users.detail_penukaran_sampah', [
                    'garbages' => $garbages,
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
}
