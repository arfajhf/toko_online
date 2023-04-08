<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_barang;

class CableController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('kategori','like','cable');
        return view('user.produk.cable', ['data' => $data]);
    }
}
