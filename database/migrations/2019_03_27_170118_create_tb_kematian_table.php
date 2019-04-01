<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kematian', function (Blueprint $table) {
            $table->bigIncrements('id_kematian');
            $table->string('id_penduduk',50);
            $table->string('hari_meninggal',50);
            $table->string('tanggal_meninggal',50);
            $table->string('tempat_meninggal',50);
            $table->string('sebab_meninggal',50);
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
        Schema::dropIfExists('tb_kematian');
    }
}
