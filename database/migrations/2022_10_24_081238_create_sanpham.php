<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('sanpham_id');
            $table->string('sanpham_image',1500);
            $table->string('sanpham_math',11);
            $table->string('sanpham_xuatxu',50);
            $table->string('sanpham_kieumay',150);
            $table->string('sanpham_kichco',50);
            $table->string('sanpham_chatlieuvo',200);
            $table->string('sanpham_chatlieukinh',200);
            $table->string('sanpham_chatlieuday',200);
            $table->string('sanpham_dochiunuoc',10);
            $table->string('sanpham_mota',150);
            $table->string('sanpham_giaban',150);
            $table->string('sanpham_gioitinh',150);
            $table->string('sanpham_soluongton',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
