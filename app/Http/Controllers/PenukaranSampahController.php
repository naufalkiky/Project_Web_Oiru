<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use Illuminate\Http\Request;

class PenukaranSampahController extends Controller
{
    public function create()
    {
        return view('users.penukaran_sampah');
    }

    public function store(Request $request)
    {
        // validasi form tambah penukaran sampah
        $request->validate([
            'garbage_weight' => ['required', 'min:1'],
            'address' => ['required'],
            'image_garbage' => ['required', 'image', 'mimes:png,jpg,jpeg,gif,svg,PNG,JPG,JPEG', 'max:2048'],
            'note' => ['required'],
        ]);

        $image = time().'.'.$request->image_garbage->extension();
        $request->image_garbage->move(public_path('assets/img/garbages'), $image);

        Garbage::create([
            'user_id' => $request->user_id,
            'garbage_weight' => $request->garbage_weight,
            'address' => $request->address,
            'image_garbage' => $image,
            'note' => $request->note
        ]);

        return redirect('/users/dashboard')->with('Penukaran berhasil!, silahkan pantau status penukaran anda');
    }
}
