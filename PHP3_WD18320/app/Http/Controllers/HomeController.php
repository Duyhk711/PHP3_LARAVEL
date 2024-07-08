<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // dd(12345);
        // $title = "trang chủ";
        // return view('clients.index', ['title' => $title]);
        $data = [];
        $data['title'] = "trang chủ";
        $data['content'] = "Đây là trang chủ";
        $data['text'] = "<u> Lớp WD18320 </u>";
        $data['dataArr'] = [
           
        ];
        
        return view('clients.index', $data);
    }
}
