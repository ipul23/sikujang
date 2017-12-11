<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualanProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('penjualan_produks', function (Blueprint $table) {
            $table->increments('id_penjualan');
            $table->integer('id_user')->unsigned();
            $table->integer('id_produk')->unsigned();
            $table->timestamps();
            $table->integer('tanggal');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->integer('jumlah')->unsigned();
            $table->integer('harga')->unsigned();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('id_produk')->references('id_produk')->on('produks')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_produks');
    }
}
