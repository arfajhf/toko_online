<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('kategori','like','cctv');
        return view('user.produk.cctv', ['data' => $data]);
    }
}
