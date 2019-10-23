<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_produk');

        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 20; $x++){

        	// insert data dummy pegawai dengan faker
        	DB::table('produk')->insert([
        		'nama_produk' => $faker->name,
        		'jenis_produk' => $faker->address,
        	]);

        }
    }
}
