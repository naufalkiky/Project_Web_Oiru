<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiSampahController extends Controller
{
    public function index()
    {
        return view('admin.transaksi_sampah');
    }
}
