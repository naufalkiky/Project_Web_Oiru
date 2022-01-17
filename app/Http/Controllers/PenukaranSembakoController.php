<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use App\Models\GroceriesTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenukaranSembakoController extends Controller
{
    public function index()
    {
        $groceries = Groceries::all();
        return view('sembako', [
            'groceries' => $groceries
        ]);
    }

    public function create($id)
    {
        $groceries = Groceries::where('id', $id)->get();
        return view('users.penukaran_sembako', [
            'groceries' => $groceries
        ]);
    }

    public function store(Request $request, $id)
    {
        $package = Groceries::where('id', $id)->first();

        if (Auth::user()->bage_points >= $package->bage_points) {
            $request->validate([
                'quantity' => ['required', 'min:1'],
            ]);
            if ($request->note != null) {
                GroceriesTransaction::create([
                    'user_id' => Auth::user()->id,
                    'groceries_id' => $id,
                    'quantity' => $request->quantity,
                    'total_bage_points' => $request->quantity * $package->bage_points,
                    'note' => $request->note,
                ]);

                $user = User::where('id', Auth::user()->id)->first();
                $user->bage_points -= $request->quantity * $package->bage_points;
                $user->update();
            } else {
                GroceriesTransaction::create([
                    'user_id' => Auth()->user()->id,
                    'groceries_id' => $id,
                    'quantity' => $request->quantity,
                    'total_bage_points' => $request->quantity * $package->bage_points,
                ]);

                $user = User::where('id', Auth::user()->id)->first();
                $user->bage_points -= $request->quantity * $package->bage_points;
                $user->update();
            }
            return back()->with('success', 'Penukaran berhasil!, silahkan pantau status penukaran anda di status penukaran sembako');
        } else {
            return back()->with('failed', 'BagePoints yang anda miliki masih kurang, ayo tukar sampah sekarang!');
        }
    }

    public function search(Request $request)
    {
        $search = $request->keyword;
        $groceries = Groceries::where('package_name', 'like', '%' . $search . '%')
        ->orWhere('description', 'like', '%' . $search . '%')
        ->paginate(5);
        return view('sembako', compact('groceries'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
