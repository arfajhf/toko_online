<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('kategori','like','cpu');
        return view('user.produk.cpu', ['data' => $data]);
    }
}
