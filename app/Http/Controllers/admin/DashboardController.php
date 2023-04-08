<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Data_barang;
use App\Models\Data_pemesanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function pesan(){
        $pesan = Data_pemesanan::all();
    }

    public function index(){
        $data = Admin::all();
        $barang = Data_barang::all();
        // $pesan = Data_pemesanan::all();
        $pesan = Data_pemesanan::where('status','dikemas')->get();
        $view = Data_barang::all()
        ->where('id','<','4');

        return view('admin.dashboardadmin', compact('data', 'barang', 'pesan','view'));
    }
}
