<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_contact')->unsigned();
            $table->integer('kode_transaksi')->unsigned();
            $table->integer('kredit')->unsigned();
            $table->integer('debit')->unsigned();
            $table->integer('nilai')->unsigned();
            $table->string('referensi');
            $table->text('keterangan');
            $table->integer('tanggal');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->timestamps();

            $table->foreign('kode_transaksi')->references('kode_transaksi')->on('category_transactions')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
