<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaohang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaohang', function (Blueprint $table) {
            $table->increments('vanchuyen_id');
            $table->string('vanchuyen_email');
            $table->string('tenvanchuyen');
            $table->string('vanchuyen_diachi');
            $table->string('vanchuyen_dienthoai');
            $table->string('vanchuyen_ghichu');
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
        Schema::dropIfExists('giaohang');
    }
}
