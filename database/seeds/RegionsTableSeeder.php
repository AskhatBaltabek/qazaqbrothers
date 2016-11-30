<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    private $regions = [
        [ 'id' => 17, 'title' => 'Восточно-Казахстанская область'],
        [ 'id' => 15, 'title' => 'Северо-Казахстанская область'],
        [ 'id' => 14, 'title' => 'Павлодарская область'],
        [ 'id' => 13, 'title' => 'Южно-Казахстанская область'],
        [ 'id' => 12, 'title' => 'Мангистауская область'],
        [ 'id' => 11, 'title' => 'Кызылординская область'],
        [ 'id' => 10, 'title' => 'Костанайская область'],
        [ 'id' => 9, 'title' => 'Карагандинская область'],
        [ 'id' => 8, 'title' => 'Жамбылская область'],
        [ 'id' => 7, 'title' => 'Западно-Казахстанская область'],
        [ 'id' => 5, 'title' => 'Атырауская область'],
        [ 'id' => 4, 'title' => 'Алматинская область'],
        [ 'id' => 3, 'title' => 'Актюбинская область'],
        [ 'id' => 2, 'title' => 'Акмолинская область']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert($this->regions);
    }
}
