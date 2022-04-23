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
        // $this->call(UsersTableSeeder::class);

        
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('karyawans')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'tanggal_lahir' =>  $faker->dateTimeThisMonth(), 
                'gaji' => $faker->numerify('##########'),
                'status_karyawan' => $faker->boolean(),
            ]);
        }
    }
}
