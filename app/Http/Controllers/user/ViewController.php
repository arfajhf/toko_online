<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($id)
    {
        $data = Data_barang::find($id);
        return view('user.modal', compact('data'));
    }
}
