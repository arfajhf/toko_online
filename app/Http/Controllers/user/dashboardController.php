<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use App\Models\Admin;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $data = Data_barang::all()
        ->where('id','<','4');
        return view('user.dashboard', ['data' => $data]);
    }
}
