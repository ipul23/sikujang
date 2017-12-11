<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabangAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabang_akuns', function (Blueprint $table) {
          $table->increments('id_cabang');
          $table->integer('id_akun')->unsigned();
          $table->integer('kode');
          $table->string('nama');
          $table->integer('jumlah')->unsigned();
          $table->timestamps();
          $table->foreign('id_akun')->references('id_akun')->on('akuns')->onDelete('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabang_akuns');
    }
}
