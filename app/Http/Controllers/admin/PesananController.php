<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Data_pemesanan;
use App\Models\Data_barang;
use App\Models\Pengirim;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $data = Data_pemesanan::all();
        $user = Admin::all();
        $barang = Data_barang::all();
        return view('admin.admin1.pesanan.pesan', ['data' => $data], ['user' => $user], ['barang' => $barang]);
    }

    public function view($id){
        $data = Data_pemesanan::find($id);
        $id_barang = $data->id_barang;
        $barang = Data_barang::find($id_barang);
        $id_user = $data->id_user;
        $user = Admin::find($id_user);
        $pengirim = Pengirim::all();
        $id_pengirim = $data->id_pengirim;
        $pengirim1 = Pengirim::find($id_pengirim);
        return view('admin.admin1.pesanan.view', compact('data', 'barang', 'user', 'pengirim', 'pengirim1'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'pengirim' => 'required',
            'status' => 'required',
        ]);

        $pengirim = Pengirim::find($request->pengirim);

        $data = Data_pemesanan::find($id);
        $data->id_pengirim = $pengirim->id;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('pesanan')->with('success', 'Data berhasil diupdate');
    }
}
