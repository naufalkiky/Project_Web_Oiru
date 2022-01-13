<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiSampahController extends Controller
{
    public function index()
    {
        $garbages = Garbage::all();
        return view('admin.transaksi_sampah', [
            'garbages' => $garbages
        ]);
    }

    public function edit($id)
    {
        $garbages = Garbage::where('id', $id)->get();
        return view('admin.detail_transaksi_sampah', [
            'garbages' => $garbages
        ]);
    }

    public function update(Request $request, $id)
    {
        $garbages = DB::table('garbages')->where('id', $id)->get();
        
        foreach($garbages as $garbage) {
            if ($garbage->status == 'Berhasil') {
                if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam penjemputan' OR $request->status == 'Berhasil') {
                    return back()->with('admin_danger', 'Penukaran sampah sudah diverifikasi!');
                }
            } else {
                if ($request->status == 'Berhasil') {
                    Garbage::where('id', $id)->update([
                        'status' => $request->status
                    ]);
                    User::where('id', $request->user_id)->update([
                        'bage_points' => $request->garbage_weight * 50
                    ]);
                    return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
                } else {
                    Garbage::where('id', $id)->update([
                        'status' => $request->status
                    ]);
                    return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
                }
            }
        }
    }
}
