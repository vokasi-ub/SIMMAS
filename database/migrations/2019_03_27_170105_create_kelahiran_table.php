<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->bigIncrements('id_kelahiran');
            $table->string('no_akta',50);
            $table->string('nama_anak',50);
            $table->string('nama_ortu',50);
            $table->string('jenis_kelamin',50);
            $table->string('no_kk',50);
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
        Schema::dropIfExists('kelahiran');
    }
}
