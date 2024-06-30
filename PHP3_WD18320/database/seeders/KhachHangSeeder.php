<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->insert(
            [
                'ten_khach_hang' => "Hoang Khanh Duy",
                'anh' => "",
                'mat_khau' => "Duy12345",
                'dia_chi' => "31 đường 422b vân canh hoài đức hà nội",
                'so_dien_thoai' => '0123456789',
                'email' => 'duyhkph41474@fpt.edu.vn'

            ]
        );
    }
}
