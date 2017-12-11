<?php

use Illuminate\Database\Seeder;
use App\Akun;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Akun::create([
          'id_user' => '1',
          'nama' => 'Aset',
        ]);

        Akun::create([
          'id_user' => '1',
          'nama' => 'Modal',
        ]);

        Akun::create([
          'id_user' => '1',
          'nama' => 'Pemasukan',
        ]);

        Akun::create([
          'id_user' => '1',
          'nama' => 'pengeluaran',
        ]);

        Akun::create([
          'id_user' => '1',
          'nama' => 'Hutang',
        ]);

        Akun::create([
          'id_user' => '1',
          'nama' => 'Piutang',
        ]);

    }
}
