<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPendatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pendatang', function (Blueprint $table) {
            $table->bigIncrements('no_pendatang');
            $table->string('tgl_pendatang',50);
            $table->string('alamat_pendatang',50);
            $table->string('keterangan',50);
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
        Schema::dropIfExists('tb_pendatang');
    }
}
