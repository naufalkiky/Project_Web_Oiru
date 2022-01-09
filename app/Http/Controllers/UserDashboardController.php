<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('users.dashboard');
    }

    public function edit()
    {
        return view('users.profil');
    }
}
