<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(FuelsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(StationsTableSeeder::class);
    }
}
