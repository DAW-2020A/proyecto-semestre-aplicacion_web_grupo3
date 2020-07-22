<?php

use App\Horario;
use Illuminate\Database\Seeder;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Horario::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            Horario::create([

                'type'=> 'monday-friday',
                'start'=> $faker->time(),
                'end'=> $faker->time(),
            ]);
        }
    }
}
