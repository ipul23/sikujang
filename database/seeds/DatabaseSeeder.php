<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = factory(App\User::class)->create([
            'name' => 'Andhika Kartika Rahayu',
            'email' => 'ankarayu@gmail.com',
            'password' => bcrypt('andhika123'),
        ]);

        $this->call(AkunSeeder::class);
        $this->call(CabangAkunSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(KontakSeeder::class);
        $this->call(CategoryTransactionSeeder::class);
    }
}
