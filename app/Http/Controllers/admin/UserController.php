<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $data = Admin::select('id','nama', 'email','no_hp', 'role')
            ->where('role','like',"user")
            ->when($search, function($query,$search){
                return $query->where('nama','like',"%{$search}%");
            })
            ->orderBy('id')
            ->paginate(50);
        return view('admin.admin1.user', compact('data'));
    }
}
