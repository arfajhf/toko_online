<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengirim;
use Illuminate\Http\Request;

class PengirimController extends Controller
{
    public function index()
    {
        $data = Pengirim::all();
        return view('admin.admin1.pengirim.index', compact('data'));
    }

    public function create()
    {
        return view('admin.admin1.pengirim.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'ongkir' => 'required|regex:/^[0-9]+$/',
        ]);

        Pengirim::create([
            'nama_pengirim' => $request->nama_pengirim,
            'ongkir' => $request->ongkir,
        ]);

        return redirect()->route('pengirim')->with('success', 'Data berhasil ditambahkan');
    }
}
