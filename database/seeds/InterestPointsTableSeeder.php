<?php

use App\InterestPoint;
use Illuminate\Database\Seeder;

class InterestPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        InterestPoint::truncate();

        $faker = \Faker\Factory::create();
        $busstops = App\BusStop::all();
        foreach($busstops as $busstop){
            for($i = 0; $i < 50; $i++) {
                $a=$i+1;
                $busstop->interespoint()->save(New
                InterestPoint([
                    'name'=> 'InterestPoint'.(string)$a,
                    'direction'=> $faker->address,
                    'phone'=> '2236089',
                    'hour_start'=>$faker->time(),
                    'hour_end'=>$faker->time(),
                    'latitude'=> $faker->numberBetween($min=0,$max=100),
                    'longitude'=> -78.52495,
                ]));
            }
        }
    }
}
