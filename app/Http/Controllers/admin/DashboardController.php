<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = Admin::all();
        $barang = Data_barang::all();

        return view('admin.dashboardadmin', ['data' => $data], ['barang' => $barang]);
    }
}
