<?php

use Illuminate\Database\Seeder;
use App\Contact;
class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
          'nama' => 'Dhijes',
          'telepon' => '085888071478',
          'email' => 'idhijes@gmail.com',
          'perusahaan' => 'Google',
          'alamat' => 'Taman Dramaga Permai',
        ]);

        Contact::create([
          'nama' => 'Oyon',
          'telepon' => '085712163208',
          'email' => 'oyon@gmail.com',
          'perusahaan' => 'Facebook',
          'alamat' => 'Dramaga Cantik',
        ]);

        Contact::create([
          'nama' => 'Nino',
          'telepon' => '081233001212',
          'email' => 'nino@gmail.com',
          'perusahaan' => 'IBM',
          'alamat' => 'Pondok Bu Sri',
        ]);

        Contact::create([
          'nama' => 'Fajar',
          'telepon' => '089712123322',
          'email' => 'fajar@gmail.com',
          'perusahaan' => 'Twitter',
          'alamat' => 'Taman Dramaga Permai',
        ]);
    }
}
