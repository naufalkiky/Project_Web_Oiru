<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiSembakoController extends Controller
{
    public function index()
    {
        return view('admin.transaksi_sembako');
    }
}
