<?php

use Illuminate\Database\Seeder;
use App\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
          'nama' => 'Jaket Kulit',
          'harga' => '250000',
          'stok' => '50',
        ]);

        Produk::create([
          'nama' => 'Tas Kulit',
          'harga' => '300000',
          'stok' => '10',
        ]);

        Produk::create([
          'nama' => 'Sepatu Kulit',
          'harga' => '400000',
          'stok' => '15',
        ]);

        Produk::create([
          'nama' => 'Ikan Pinggang Kulit',
          'harga' => '100000',
          'stok' => '20',
        ]);
    }
}
