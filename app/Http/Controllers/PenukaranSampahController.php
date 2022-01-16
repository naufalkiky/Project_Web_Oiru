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
            'image_garbage' => ['required', 'image', 'mimes:png,jpg,jpeg,gif,svg,PNG,JPG,JPEG', 'max:2048'],
        ]);

        $image = time().'.'.$request->image_garbage->extension();
        $request->image_garbage->move(public_path('assets/img/garbages'), $image);

        if ($request->note != null) {
            Garbage::create([
                'user_id' => Auth()->user()->id,
                'garbage_weight' => $request->garbage_weight,
                'image_garbage' => $image,
                'note' => $request->note,
            ]);
        } else {
            Garbage::create([
                'user_id' => Auth()->user()->id,
                'garbage_weight' => $request->garbage_weight,
                'image_garbage' => $image,
            ]);
        }

        return redirect('penukaran-sampah')->with('success', 'Penukaran berhasil!, silahkan pantau status penukaran anda di dashboard');
    }
}
