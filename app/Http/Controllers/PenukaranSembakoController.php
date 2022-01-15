<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use Illuminate\Http\Request;
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

    public function search(Request $request)
    {
        $search = $request->search;
        $groceries = Groceries::where('package_name', 'like', '%' . $search . '%')
        ->orWhere('description', 'like', '%' . request('search') . '%')
        ->get();
        
        return view('sembako', [
            'groceries' => $groceries
        ]);
    }
}
