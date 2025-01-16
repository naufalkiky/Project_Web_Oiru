<?php

namespace App\Http\Controllers;

use App\Models\Jelantah;
use App\Models\Groceries;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $total_users = User::where('isAdmin', 0)->count();
        $total_groceries = Groceries::count();
        $total_weight = Jelantah::where('status', 'Berhasil')->sum('berat_jelantah');

        return view('admin.dashboard', [
            'total_users' => $total_users,
            'total_groceries' => $total_groceries,
            'total_weight'=> $total_weight
        ]);
    }

    public function users()
    {
        $number = 1;
        $users = User::where('isAdmin', 0)->paginate(10);
        return view('admin.pengguna', [
            'number' => $number,     
            'users' => $users
        ]);
    }
}
