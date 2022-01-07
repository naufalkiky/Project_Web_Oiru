<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenukaranSembakoController extends Controller
{
    public function create()
    {
        return view('users.penukaran_sembako');
    }
}
