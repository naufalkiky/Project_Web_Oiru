<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenukaranSampahController extends Controller
{
    public function create()
    {
        return view('users.penukaran_sampah');
    }
}
