<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    public function index($id){
        $data = Data_barang::find($id);
        return view('user.pesan.pemesanan', compact('data'));
    }

    public function create(Request $request, $id){
        $request->validate([
            
        ]);
    }
}
