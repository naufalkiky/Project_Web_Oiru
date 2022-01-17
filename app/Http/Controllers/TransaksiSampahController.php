<?php

namespace App\Http\Controllers;

use App\Models\Garbage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiSampahController extends Controller
{
    public function index()
    {
        $number = 1;
        $garbages = Garbage::orderBy('id', 'desc')->get();
        return view('admin.transaksi_sampah', [
            'garbages' => $garbages,
            'number' => $number
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
        $garbage = DB::table('garbages')->where('id', $id)->first();

        if ($garbage->status == 'Berhasil') {
            if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam penjemputan' OR $request->status == 'Berhasil') {
                return back()->with('admin_danger', 'Penukaran sampah sudah berhasil dilakukan!');
            }
        } else if ($garbage->status == 'Dalam penjemputan') {
            if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam penjemputan') {
                return back()->with('admin_danger', 'Sampah sudah dalam penjemputan!');
            } else {
                Garbage::where('id', $id)->update([
                    'status' => $request->status
                ]);

                $user = User::where('id', $garbage->user_id)->first();
                $user->bage_points += $request->garbage_weight * 50;
                $user->update();

                return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
            }
        } else {
            if ($request->status == 'Berhasil') {
                return back()->with('admin_danger', 'Penjemputan sampah belum dilakukan!');
            } else if ($request->status == 'Dalam penjemputan') {
                Garbage::where('id', $id)->update([
                    'status' => $request->status,
                    'pick_up_number' => rand()
                ]);
                return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
            } else {
                Garbage::where('id', $id)->update([
                    'status' => $request->status,
                ]);
                return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
            }
        }
    }

    public function delete($id)
    {
        Garbage::where('id', $id)->delete();
        return redirect('admin/dashboard/transaksi-sampah')->with('admin_success', 'Data penukaran sampah berhasil dihapus!');
    }
}
