<?php

namespace App\Http\Controllers\produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data_barang;

class UpsController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('kategori','like','ups');
        return view('user.produk.usp', ['data' => $data]);
    }
}
