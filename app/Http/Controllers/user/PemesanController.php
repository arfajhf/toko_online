<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use App\Models\Data_pemesanan;
use DateTime;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    public function index($id){
        $data = Data_barang::find($id);
        return view('user.pesan.pemesanan', compact('data'));
    }

    public function create(Request $request, $id){
        $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'no_transaksi' => 'required',
            'nama_pemesan' => 'required',
            'jumlah_beli' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
        ]);
        $tanggal_transaksi = new DateTime();
        // return $tanggal_transaksi;
        // dd($tanggal_transaksi);
        $harga_akhir = $request->harga * $request->jumlah_beli;

        Data_pemesanan::create(
            [
                'id_user' => $request->id_user,
                'id_barang' => $id,
                'no_transaksi' => $request->no_transaksi,
                'nama_pemesan' => $request->nama_pemesan,
                'jumlah_beli' => $request->jumlah_beli,
                'alamat' => $request->alamat,
                'total_harga' => $harga_akhir,
                'tanggal_teransaksi' => $tanggal_transaksi,
                'status' => 'dikemas',
            ]
        );
        // $data->save();
        return redirect()->route('dashboard')->with('success', 'Checkout berhasil');

    }

    // public function create(Request $request, $id){
    //     $request->validate([
    //         'nama_pemesan' => 'required',
    //         'jumlah_beli' => 'required',
    //         'alamat' => 'required',
    //         ''
    //     ]);
    // }
}
