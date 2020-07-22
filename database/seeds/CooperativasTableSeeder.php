<?php

use App\Cooperativa;
use Illuminate\Database\Seeder;

class CooperativasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Cooperativa::truncate();

        $faker = \Faker\Factory::create();


        Cooperativa::create([
            'name'=> 'Coopeativa1',
            'logo'=> $faker->sentence,
            'direction'=> $faker->address,
            'phone'=> '2555255',
            'mail'=> $faker->email,
        ]);

    }
}
