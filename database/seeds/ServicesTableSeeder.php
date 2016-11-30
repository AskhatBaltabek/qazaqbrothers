<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    private $services = [
        [ 'title' => 'Безналичный расчет' ],
        [ 'title' => 'Магазин' ],
        [ 'title' => 'Кафе' ],
        [ 'title' => 'Туалет' ],
        [ 'title' => 'Терминал оплаты' ],
        [ 'title' => 'Автомойка' ],
        [ 'title' => 'СТО' ],
        [ 'title' => 'Пункт самообслуживания' ],
        [ 'title' => 'Шиномонтаж' ],
        [ 'title' => 'Подкачка колес' ],
        [ 'title' => 'Замена масла' ],
        [ 'title' => 'Гостиница' ],
        [ 'title' => 'Wi-Fi' ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert($this->services);
    }
}
