<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;

    // cách 1: sử dụng Raw Query (SQL thuần)

    // 
    //     // $listSanPham = DB::select('SELECT * FROM san_phams ORDER BY id DESC') ;

    //     // return $listSanPham;


    // cách 2: sử dụng Query builder
    public function getList()
    {
        $listSanPham = DB::table('san_phams')
            ->orderBydesc('id')
            ->get();
        return $listSanPham;
    }

    //     // cách 3: sử dụng eloquent

    public function createProduct($data){
        DB::table('san_phams')->insert($data);
    }

    public function getDetailProduct($id){
        $san_pham = DB::table('san_phams')->where('id', $id)->first();
        return $san_pham;
    }



    protected $table = 'san_phams';
    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'hinh_anh',
        'gia',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai',

    ];
}
