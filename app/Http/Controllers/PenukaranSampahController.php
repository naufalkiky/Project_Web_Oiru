<?php

namespace App\Http\Controllers;

use App\Models\Jelantah;
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
            'berat_jelantah' => ['required', 'min:1'],
            'gambar_jelantah' => ['required', 'image', 'mimes:png,jpg,jpeg,gif,svg,PNG,JPG,JPEG', 'max:2048'],
        ]);

        $image = time().'.'.$request->gambar_jelantah->extension();
        $request->gambar_jelantah->move(public_path('assets/img/jelantah'), $image);

        if ($request->note != null) {
            Jelantah::create([
                'user_id' => Auth()->user()->id,
                'berat_jelantah' => $request->berat_jelantah,
                'berat_jelantah' => $image,
                'note' => $request->note,
            ]);
        } else {
            Jelantah::create([
                'user_id' => Auth()->user()->id,
                'berat_jelantah' => $request->berat_jelantah,
                'gambar_jelantah' => $image,
            ]);
        }

        return redirect('penukaran-sampah')->with('success', 'Penukaran berhasil!, silahkan pantau status penukaran anda di dashboard');
    }
}
