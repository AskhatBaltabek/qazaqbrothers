<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Station;
use App\Fuel;

class MainController extends Controller
{

    public function test ()
    {
        $fuel = Fuel::first();
        $station = Station::first();

        $station->fuels()->attach($fuel->id, ['price' => 120.3]);

        dd($station);
    }

}
