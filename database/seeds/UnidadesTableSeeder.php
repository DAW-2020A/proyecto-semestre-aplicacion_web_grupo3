<?php

use App\Unidad;
use Illuminate\Database\Seeder;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Unidad::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {

            Unidad::create([

                'placa'=> 'PDK847'.(string)$i,
                'unit_number'=> $faker->numberBetween($min=1130,$max=2500),
            ]);
        }
    }
}
