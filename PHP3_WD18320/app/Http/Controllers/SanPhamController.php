<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  đây là nơi viết các hàm xử lí công việc
    public function index()
    {
        // dd("đây là sản phẩm controller");
        $title = "danh sách sản phẩm";
        $sanPhams = DB::table('san_phams')->get();
        return view('sanpham.index', [
                                    'title' => $title,
                                    'sanPhams' => $sanPhams
                                    ]);

    }

   
}
