<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_barang;

class PcaController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('kategori','like','pca');
        return view('user.produk.pca', ['data' => $data]);
    }
}
