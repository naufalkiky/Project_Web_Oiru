<?php

namespace App\Http\Controllers;

use App\Models\Jelantah;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiSampahController extends Controller
{
    public function index()
    {
        $number = 1;
        $Total_Jelantah = Jelantah::orderBy('id', 'desc')->paginate(10);
        return view('admin.transaksi_sampah', [
            'Total_Jelantah' => $Total_Jelantah,
            'number' => $number
        ]);
    }

    public function edit($id)
    {
        $Total_Jelantah = Jelantah::where('id', $id)->get();
        return view('admin.detail_transaksi_sampah', [
            'Total_Jelantah' => $Total_Jelantah
        ]);
    }

    public function update(Request $request, $id)
    {
        $jelantah = Jelantah::where('id', $id)->first();

        if ($jelantah->status == 'Berhasil') {
            if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam penjemputan' OR $request->status == 'Berhasil') {
                return back()->with('admin_danger', 'Penukaran jelantah sudah berhasil dilakukan!');
            }
        } else if ($jelantah->status == 'Dalam penjemputan') {
            if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam penjemputan') {
                return back()->with('admin_danger', 'Jelantah sudah dalam penjemputan!');
            } else {
                Jelantah::where('id', $id)->update([
                    'status' => $request->status
                ]);

                $user = User::where('id', $jelantah->user_id)->first();
                $user->oiru_points += $request->berat_jelantah * 50;
                $user->update();

                return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
            }
        } else {
            if ($request->status == 'Berhasil') {
                return back()->with('admin_danger', 'Penjemputan sampah belum dilakukan!');
            } else if ($request->status == 'Dalam penjemputan') {
                Jelantah::where('id', $id)->update([
                    'status' => $request->status,
                    'pick_up_number' => rand()
                ]);
                return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
            } else {
                Jelantah::where('id', $id)->update([
                    'status' => $request->status,
                ]);
                return back()->with('admin_success', 'Status penukaran sampah berhasil diubah!');
            }
        }
    }

    public function delete($id)
    {
        Jelantah::where('id', $id)->delete();
        return redirect('admin/dashboard/transaksi-sampah')->with('admin_success', 'Data penukaran sampah berhasil dihapus!');
    }
}
