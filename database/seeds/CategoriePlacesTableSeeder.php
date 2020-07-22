<?php

use App\CategoriePlace;
use Illuminate\Database\Seeder;

class CategoriePlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        CategoriePlace::truncate();

        #$faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            $a=$i+1;
            CategoriePlace::create([

                'name'=> 'Categorie Place'.(string)$a,
            ]);
        }
    }
}
