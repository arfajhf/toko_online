<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data = Data_barang::all();

        return view('admin.admin1.produk.index', compact('data'));
    }

    public function create(){
        return view('admin.admin1.produk.create');
    }

    public function tambah(Request $request){

        // return $request->file('gambar')->store('gambar');

        $request->validate([
            'nama_barang' => 'required|max:20',
            'harga' => 'required',
            'gambar' => 'required|image|file|max:2024',
            'kondisi' => 'required',
            'kategori' => 'required',
            'berat' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = Data_barang::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambar', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('produk')->with('success', 'Data berhasil di tambahkan');

    }

    public function delete($id){
        Data_barang::find($id)->delete();
        return redirect()->route('produk')->with('success', 'Data berhasil di hapus');
    }

    public function edit($id){
        $data = Data_barang::find($id);
        return view('admin.admin1.produk.edit', ['data' => $data]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_barang' => 'required|max:20',
            'harga' => 'required',
            'gambar' => 'required|image|file|max:2024',
            'kondisi' => 'required',
            'kategori' => 'required',
            'berat' => 'required',
            'deskripsi' => 'required',
        ]);

        // $data = Data_barang::update($request->find($id));
        $data = Data_barang::find($id);

        $data->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
            'kategori' => $request->kategori,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambar', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('produk')->with('success', 'Data berhasil di tambahkan');
    }

    public function view($id){
        $data = Data_barang::find($id);
        return view('admin.admin1.produk.view', ['data'=> $data]);
    }


}
