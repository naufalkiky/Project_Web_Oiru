<?php

namespace App\Http\Controllers;

use App\Models\GroceriesTransaction;
use Illuminate\Http\Request;

class TransaksiSembakoController extends Controller
{
    public function index()
    {
        $number = 1;
        $groceries_transactions = GroceriesTransaction::orderBy('id', 'desc')->get();
        return view('admin.transaksi_sembako', [
            'groceries_transactions' => $groceries_transactions,
            'number' => $number
        ]);
    }

    public function edit($id)
    {
        $groceries_transactions = GroceriesTransaction::where('id', $id)->get();
        return view('admin.detail_transaksi_sembako', [
            'groceries_transactions' => $groceries_transactions
        ]);
    }
}
