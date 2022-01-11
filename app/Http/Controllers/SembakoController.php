<?php

namespace App\Http\Controllers;

use App\Models\Groceries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SembakoController extends Controller
{
    public function index()
    {
        $groceries = DB::table('groceries')->paginate(10);
        return view('admin.sembako', [
            'groceries' => $groceries
        ]);
    }

    public function create()
    {
        return view('admin.tambah_sembako');
    }

    public function store(Request $request)
    {
        // validasi form tambah data sembako
        $request->validate([
            'package_name' => ['required'],
            'bage_points' => ['required', 'min:1'],
            'image_groceries' => ['required', 'image', 'mimes:png,jpg,jpeg,gif,svg,PNG,JPG,JPEG', 'max:2048'],
            'description' => ['required'],
        ]);

        $image = time().'.'.$request->image_groceries->extension();
        $request->image_groceries->move(public_path('assets/img/groceries'), $image);

        Groceries::create([
            'package_name' => $request->package_name,
            'bage_points' => $request->bage_points,
            'image_groceries' => $image,
            'description' => $request->description
        ]);

        return redirect('admin/dashboard/data-sembako')->with('admin_success', 'Data sembako berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $groceries = Groceries::where('id', $id)->get();
        return view('admin.update_sembako', [
            'groceries' => $groceries
        ]);
    }

    public function update(Request $request, $id)
    {
        if (!$request->image_groceries == null) {
            $image = time().'.'.$request->image_groceries->extension();
            $request->image_groceries->move(public_path('assets/img/groceries'), $image);

            Groceries::where('id', $id)->update([
                'package_name' => $request->package_name,
                'bage_points' => $request->bage_points,
                'image_groceries' => $image,
                'description' => $request->description
            ]);
        } else {
            Groceries::where('id', $id)->update([
                'package_name' => $request->package_name,
                'bage_points' => $request->bage_points,
                'description' => $request->description
            ]);
        }
        return redirect('admin/dashboard/data-sembako')->with('admin_success', 'Data sembako berhasil diperbarui!');
    }

    public function delete($id)
    {
        Groceries::where('id', $id)->delete();
        return redirect('admin/dashboard/data-sembako')->with('admin_success', 'Data sembako berhasil dihapus!');
    }
}
