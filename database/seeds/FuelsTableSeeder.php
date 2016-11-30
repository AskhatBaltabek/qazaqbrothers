<?php

use Illuminate\Database\Seeder;

class FuelsTableSeeder extends Seeder
{

    private $fuels = [
        [ 'title' => 'АИ-98' ],
        [ 'title' => 'АИ-95' ],
        [ 'title' => 'АИ-92' ],
        [ 'title' => 'АИ-80' ],
        [ 'title' => 'ГАЗ' ],
        [ 'title' => 'ДТ' ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuels')->insert($this->fuels);
    }
}
