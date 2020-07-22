<?php

use App\Rutas;
use Illuminate\Database\Seeder;

class RutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Rutas::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 20; $i++) {
            $a=$i+1;
            Rutas::create([

                'name'=> 'Ruta'.(string)$a,
                'units_number'=> $faker->numberBetween($min=5,$max=20),
            ]);
        }
    }
}
