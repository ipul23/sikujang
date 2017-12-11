<?php

use Illuminate\Database\Seeder;
use App\CategoryTransaction;

class CategoryTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CategoryTransaction::create([
        'nama_transaksi' => 'Pemasukan Tunai',
      ]);
      CategoryTransaction::create([
        'nama_transaksi' => 'Pemasukan Sebagai Piutang',
      ]);
      CategoryTransaction::create([
        'nama_transaksi' => 'Pengeluaran Tunai',
      ]);
      CategoryTransaction::create([
        'nama_transaksi' => 'Pengeluaran Sebagai Hutang',
      ]);
      CategoryTransaction::create([
        'nama_transaksi' => 'Tambah Hutang',
      ]);
      CategoryTransaction::create([
        'nama_transaksi' => 'Bayar Hutang',
      ]);

    }
}
