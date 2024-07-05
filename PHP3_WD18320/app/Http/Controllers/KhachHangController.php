<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    public function index(){
        $khachHangs = DB::table('khach_hangs')->get();
        return view('khachhang.danhsach', [
            'khachHangs' => $khachHangs
        ]);
    }

    public function add(){
        return view('khachhang.themkhachhang');
    }

    public function edit(){
        return view('khachhang.chinhsuakhachhang');
    }
}
