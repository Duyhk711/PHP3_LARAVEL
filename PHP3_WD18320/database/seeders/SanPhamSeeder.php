<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // nơi xử lí để tạo ra các dữ liệu mẫu
        // sử dụng query builder để thêm dữ liệu

        // Tạo dữ liệu mẫu bằng faker trong laravel


        DB::table('san_phams')->insert(
            [
                [
                    'ma_san_pham' => 'SP001',
                    'ten_san_pham' => 'iphone 15',
                    'gia' => 100000,
                    'so_luong' => 10,
                    'ngay_nhap' => '2024-06-28',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => true,
                ],
                [
                    'ma_san_pham' => 'SP002',
                    'ten_san_pham' => 'iphone 15',
                    'gia' => 200000,
                    'so_luong' => 20,
                    'ngay_nhap' => '2024-06-28',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => true,

                ],
                [
                    'ma_san_pham' => 'SP003',
                    'ten_san_pham' => 'iphone 15',
                    'gia' => 300000,
                    'so_luong' => 30,
                    'ngay_nhap' => '2024-06-28',
                    'mo_ta' => 'Mô tả sản phẩm',
                    'trang_thai' => true,
                ],
                
            ]
        );
    }
}
