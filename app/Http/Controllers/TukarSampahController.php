<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TukarSampahController extends Controller
{
    public function index()
    {
        return view('users.tukar_sampah');
    }
}
