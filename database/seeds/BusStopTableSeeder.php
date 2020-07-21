<?php

use App\BusStop;
use Illuminate\Database\Seeder;

class BusStopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        BusStop::truncate();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            $a=$i+1;
            BusStop::create([

                'name'=> 'Bus stop'.(string)$a,
                'direction'=> $faker->address,
                'latitude'=> -0.335985,
                'longitude'=> -75.76223,
            ]);
        }
    }
}
