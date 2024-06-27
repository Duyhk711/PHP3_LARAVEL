<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            // $table->id(); // primary
            $table->increments('id'); // primary, tự động tăng
            $table->string('ma_san_pham', 10)->unique(); // unique check trùng
            $table->string('ten_san_pham', 100);
            $table->double('gia',8,2);
            $table->integer('so_luong');
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable(); // nullable cho phép giá trị là null
            $table->boolean('trang_thai')->default(0); //default set giá trị mặc định
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
