<?php

use App\Turno;
use Illuminate\Database\Seeder;

class TurnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Turno::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 20; $i++) {
            $a=$i+1;
            Turno::create([

                'date'=> $faker->date(),
                'hour_start'=>$faker->time(),
            ]);
        }
    }
}
