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
            $u->services()->attach($service_ids);
            
            
            $fuel_ids = [1 , 2 , 3 , 4 , 5 , 6 ];
            $fuel_ids = array_splice($fuel_ids, mt_rand(1, count($fuel_ids)));
            $rand_fuels = [];

            foreach ($fuel_ids as $key => $value) {
                $rand_fuels[$value] = ['price' => mt_rand(100, 140)];
            };
            
            $u->fuels()->attach($rand_fuels);
        });
    }
}
