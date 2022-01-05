<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TukarSembakoController extends Controller
{
    public function index()
    {
        return view('users.tukar_sembako');
    }
}
