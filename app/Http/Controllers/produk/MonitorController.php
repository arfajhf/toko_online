<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('kategori','like','notebook');
        return view('user.produk.monitor', ['data' => $data]);
    }
}
