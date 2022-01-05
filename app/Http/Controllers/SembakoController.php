<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SembakoController extends Controller
{
    public function index()
    {
        return view('admin.sembako');
    }

    public function create()
    {
        return view('admin.tambah_sembako');
    }
}
