<?php

use App\Driver;
use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Driver::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            Driver::create([
                'name'=> 'Miguel',
                'last_name'=> $faker->lastName,
                'cellphone'=> '0980271574',
                'phone'=> '2236088',
                'direction'=> $faker->address,
                'mail'=> $faker->email,
                'date'=> $faker->date(),
                ]);
        }
    }
}
