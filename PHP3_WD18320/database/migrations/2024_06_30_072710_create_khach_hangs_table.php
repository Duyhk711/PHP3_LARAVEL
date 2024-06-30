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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_khach_hang', 255);
            $table->string('anh', 255)->nullable();
            $table->string('mat_khau', 255);
            $table->string('dia_chi', 255);
            $table->string('so_dien_thoai',11);
            $table->string('email', 50);
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
