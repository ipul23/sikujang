<?php

use Illuminate\Database\Seeder;
use\App\cabang_akun;

class CabangAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cabang_akun::create([
          'id_akun' => '1',
          'kode' => '1111',
          'nama' => 'KAS',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '1',
          'kode' => '1112',
          'nama' => 'BANK BCA',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '1',
          'kode' => '1113',
          'nama' => 'BANK BRI',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '1',
          'kode' => '1114',
          'nama' => 'BANK BNI',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '1',
          'kode' => '1115',
          'nama' => 'BANK MANDIRI',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '2',
          'kode' => '2111',
          'nama' => 'MODAL USAHA',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '3',
          'kode' => '3111',
          'nama' => 'PENDAPATAN USAHA',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '4',
          'kode' => '4111',
          'nama' => 'BIAYA OPERASIONAL',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '4',
          'kode' => '4112',
          'nama' => 'BIAYA GAJI',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '5',
          'kode' => '5110',
          'nama' => 'PENDAPATAN DITERIMA DIMUKA',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '5',
          'kode' => '5111',
          'nama' => 'HUTANG USAHA',
          'jumlah' => '0',
        ]);

        cabang_akun::create([
          'id_akun' => '6',
          'kode' => '6111',
          'nama' => 'PIUTANG USAHA',
          'jumlah' => '0',
        ]);
    }
}
