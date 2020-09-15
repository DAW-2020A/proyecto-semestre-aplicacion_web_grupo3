<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(BusStopTableSeeder::class);
        $this->call(CategoriePlacesTableSeeder::class);
        $this->call(CooperativasTableSeeder::class);
        $this->call(UnidadesTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(HorariosTableSeeder::class);
        $this->call(InterestPointsTableSeeder::class);
        $this->call(RutasTableSeeder::class);
        $this->call(TurnosTableSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
