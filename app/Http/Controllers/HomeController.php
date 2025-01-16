<?php

namespace App\Http\Controllers;

use App\Models\Jelantah;
use App\Models\Groceries;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $total_users = User::where('isAdmin', 0)->count();
        $total_groceries = Groceries::count();
        $total_weight = Jelantah::where('status', 'Berhasil')->sum('berat_jelantah');
        return view('home', [
            'total_users' => $total_users,
            'total_groceries' => $total_groceries,
            'total_weight'=> $total_weight
        ]);
    }

    // public function welcome()
    // {
    //     return view('welcome');
    // }

    public function procedure()
    {
        return view('prosedur');
    }

    public function about()
    {
        return view('about');
    }

    public function visimisi()
    {
        return view('visi_misi');
    }
    
    public function ourteam()
    {
        return view('our_team');
    }
}
