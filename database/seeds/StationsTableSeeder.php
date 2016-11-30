<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Station::class, 80)->create()->each(function ($u) {
            $service_ids = [1,2,3,4,5,6,7,8,9,10,11,12,13];
            $service_ids = array_slice($service_ids, mt_rand(0, count($service_ids) - 1));
            $fuel_ids = [
                1 => ['price' => mt_rand(100, 140)],
                2 => ['price' => mt_rand(100, 140)],
                3 => ['price' => mt_rand(100, 140)],
                4 => ['price' => mt_rand(100, 140)],
                5 => ['price' => mt_rand(100, 140)],
                6 => ['price' => mt_rand(100, 140)],
            ];
            array_slice($fuel_ids, mt_rand(1, count($fuel_ids)));
            
            $u->fuels()->attach($fuel_ids);
            $u->services()->attach($service_ids);
        });
    }
}
