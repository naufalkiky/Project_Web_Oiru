<?php

namespace App\Http\Controllers;

use App\Models\GroceriesTransaction;
use Illuminate\Http\Request;

class TransaksiSembakoController extends Controller
{
    public function index()
    {
        $number = 1;
        $groceries_transactions = GroceriesTransaction::orderBy('id', 'desc')->get();
        return view('admin.transaksi_sembako', [
            'groceries_transactions' => $groceries_transactions,
            'number' => $number
        ]);
    }

    public function edit($id)
    {
        $groceries_transactions = GroceriesTransaction::where('id', $id)->get();
        return view('admin.detail_transaksi_sembako', [
            'groceries_transactions' => $groceries_transactions
        ]);
    }

    public function update(Request $request, $id)
    {
        $transaction = GroceriesTransaction::where('id', $id)->first();
        
        if ($transaction->status == 'Berhasil') {
            if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam pengiriman') {
                return back()->with('admin_danger', 'Penukaran paket sembako sudah berhasil dilakukan!');
            }
        } else if ($transaction->status == 'Dalam pengiriman') {
            if ($request->status == 'Belum diverifikasi' OR $request->status == 'Dalam pengiriman') {
                return back()->with('admin_danger', 'Paket sembako sudah dalam pengiriman kepada pengguna!');
            } else {
                GroceriesTransaction::where('id', $id)->update([
                    'status' => $request->status
                ]);
            }
        } else {
            if ($request->status == 'Berhasil') {
                return back()->with('admin_danger', 'Pengiriman paket sembako belum dilakukan!');
            } else if ($request->status == 'Dalam pengiriman') {
                GroceriesTransaction::where('id', $id)->update([
                    'status' => $request->status,
                    'invoice_number' => rand()
                ]);
                return back()->with('admin_success', 'Status penukaran paket sembako berhasil diubah!');
            } else {
                GroceriesTransaction::where('id', $id)->update([
                    'status' => $request->status,
                ]);
                return back()->with('admin_success', 'Status penukaran paket sembako berhasil diubah!');
            }
        }
    }

    public function delete($id)
    {
        GroceriesTransaction::where('id', $id)->delete();
        return redirect('admin/dashboard/transaksi-sembako')->with('admin_success', 'Data penukaran sembako berhasil dihapus!');
    }
}
