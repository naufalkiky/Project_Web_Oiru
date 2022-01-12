<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use Illuminate\Http\Request;

class TransaksiSampahController extends Controller
{
    public function index()
    {
        $garbages = Garbage::all();
        return view('admin.transaksi_sampah', [
            'garbages' => $garbages
        ]);
    }

    public function edit($id)
    {
        $garbages = Garbage::where('id', $id)->get();
        return view('admin.detail_transaksi_sampah', [
            'garbages' => $garbages
        ]);
    }
}
