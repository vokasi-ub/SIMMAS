<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penduduk', function (Blueprint $table) {
            $table->bigIncrements('id_penduduk');
            $table->string('nama_penduduk',50);
            $table->string('agama',50);
            $table->string('pendidikan_terakhir',50);
            $table->string('status',50);
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
        Schema::dropIfExists('tb_penduduk');
    }
}
