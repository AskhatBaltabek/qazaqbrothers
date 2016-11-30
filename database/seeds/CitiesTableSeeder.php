<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    private $cities = [
        [ 'id' => 83, 'title' => 'Щучинск', 'region_id' => 2 ],
        [ 'id' => 61, 'title' => 'Степняк', 'region_id' => 2 ],
        [ 'id' => 60, 'title' => 'Степногорск', 'region_id' => 2 ],
        [ 'id' => 47, 'title' => 'Макинск', 'region_id' => 2 ],
        [ 'id' => 40, 'title' => 'Кокшетау', 'region_id' => 2 ],
        [ 'id' => 20, 'title' => 'Есиль', 'region_id' => 2 ],
        [ 'id' => 19, 'title' => 'Ерейментау', 'region_id' => 2 ],
        [ 'id' => 18, 'title' => 'Державинск', 'region_id' => 2 ],
        [ 'id' => 13, 'title' => 'Атбасар', 'region_id' => 2 ],
        [ 'id' => 12, 'title' => 'Астана', 'region_id' => 2 ],
        [ 'id' => 2, 'title' => 'Акколь', 'region_id' => 2 ],
        [ 'id' => 85, 'title' => 'Эмба', 'region_id' => 3 ],
        [ 'id' => 76, 'title' => 'Шалкар', 'region_id' => 3 ],
        [ 'id' => 75, 'title' => 'Хромтау', 'region_id' => 3 ],
        [ 'id' => 67, 'title' => 'Темир', 'region_id' => 3 ],
        [ 'id' => 32, 'title' => 'Кандыагаш', 'region_id' => 3 ],
        [ 'id' => 25, 'title' => 'Жем', 'region_id' => 3 ],
        [ 'id' => 7, 'title' => 'Алга', 'region_id' => 3 ],
        [ 'id' => 6, 'title' => 'Актобе', 'region_id' => 3 ],
        [ 'id' => 73, 'title' => 'Уштобе', 'region_id' => 4],
        [ 'id' => 72, 'title' => 'Учарал', 'region_id' => 4],
        [ 'id' => 66, 'title' => 'Текели', 'region_id' => 4],
        [ 'id' => 64, 'title' => 'Талдыкорган', 'region_id' => 4],
        [ 'id' => 63, 'title' => 'Талгар', 'region_id' => 4],
        [ 'id' => 55, 'title' => 'Сарканд', 'region_id' => 4],
        [ 'id' => 38, 'title' => 'Каскелен', 'region_id' => 4],
        [ 'id' => 33, 'title' => 'Капчагай', 'region_id' => 4],
        [ 'id' => 30, 'title' => 'Есик', 'region_id' => 4],
        [ 'id' => 23, 'title' => 'Жаркент', 'region_id' => 4],
        [ 'id' => 8, 'title' => 'Алматы', 'region_id' => 4],
        [ 'id' => 42, 'title' => 'Кульсары', 'region_id' => 5 ],
        [ 'id' => 14, 'title' => 'Атырау', 'region_id' => 5 ],
        [ 'id' => 70, 'title' => 'Уральск', 'region_id' => 7 ],
        [ 'id' => 3, 'title' => 'Аксай', 'region_id' => 7 ],
        [ 'id' => 82, 'title' => 'Шу', 'region_id' => 8 ],
        [ 'id' => 65, 'title' => 'Тараз', 'region_id' => 8 ],
        [ 'id' => 36, 'title' => 'Каратау', 'region_id' => 8 ],
        [ 'id' => 22, 'title' => 'Жанатас', 'region_id' => 8 ],
        [ 'id' => 79, 'title' => 'Шахтинск', 'region_id' => 9 ],
        [ 'id' => 68, 'title' => 'Темиртау', 'region_id' => 9 ],
        [ 'id' => 57, 'title' => 'Сатпаев', 'region_id' => 9 ],
        [ 'id' => 54, 'title' => 'Сарань', 'region_id' => 9 ],
        [ 'id' => 51, 'title' => 'Приозерск', 'region_id' => 9 ],
        [ 'id' => 37, 'title' => 'Каркаралинск', 'region_id' => 9 ],
        [ 'id' => 35, 'title' => 'Каражал', 'region_id' => 9 ],
        [ 'id' => 34, 'title' => 'Караганда', 'region_id' => 9 ],
        [ 'id' => 24, 'title' => 'Жезказган', 'region_id' => 9 ],
        [ 'id' => 17, 'title' => 'Балхаш', 'region_id' => 9 ],
        [ 'id' => 1, 'title' => 'Абай', 'region_id' => 9 ],
        [ 'id' => 53, 'title' => 'Рудный', 'region_id' => 10 ],
        [ 'id' => 45, 'title' => 'Лисаковск', 'region_id' => 10 ],
        [ 'id' => 41, 'title' => 'Костанай', 'region_id' => 10 ],
        [ 'id' => 27, 'title' => 'Житикара', 'region_id' => 10 ],
        [ 'id' => 10, 'title' => 'Аркалык', 'region_id' => 10 ],
        [ 'id' => 44, 'title' => 'Кызылорда', 'region_id' => 11 ],
        [ 'id' => 31, 'title' => 'Казалинск', 'region_id' => 11 ],
        [ 'id' => 16, 'title' => 'Байконур', 'region_id' => 11 ],
        [ 'id' => 9, 'title' => 'Аральск', 'region_id' => 11 ],
        [ 'id' => 74, 'title' => 'Форт-Шевченко', 'region_id' => 12 ],
        [ 'id' => 21, 'title' => 'Жанаозен', 'region_id' => 12 ],
        [ 'id' => 5, 'title' => 'Актау', 'region_id' => 12 ],
        [ 'id' => 81, 'title' => 'Шымкент', 'region_id' => 13 ],
        [ 'id' => 78, 'title' => 'Шардара', 'region_id' => 13 ],
        [ 'id' => 69, 'title' => 'Туркестан', 'region_id' => 13 ],
        [ 'id' => 56, 'title' => 'Сарыагаш', 'region_id' => 13 ],
        [ 'id' => 46, 'title' => 'Ленгер', 'region_id' => 13 ],
        [ 'id' => 39, 'title' => 'Кентау', 'region_id' => 13 ],
        [ 'id' => 26, 'title' => 'Жетысай', 'region_id' => 13 ],
        [ 'id' => 11, 'title' => 'Арысь', 'region_id' => 13 ],
        [ 'id' => 84, 'title' => 'Экибастуз', 'region_id' => 14 ],
        [ 'id' => 49, 'title' => 'Павлодар', 'region_id' => 14 ],
        [ 'id' => 4, 'title' => 'Аксу', 'region_id' => 14 ],
        [ 'id' => 62, 'title' => 'Тайынша', 'region_id' => 15 ],
        [ 'id' => 50, 'title' => 'Петропавловск', 'region_id' => 15 ],
        [ 'id' => 48, 'title' => 'Мамлютка', 'region_id' => 15 ],
        [ 'id' => 80, 'title' => 'Шемонаиха', 'region_id' => 17 ],
        [ 'id' => 77, 'title' => 'Шар', 'region_id' => 17 ],
        [ 'id' => 71, 'title' => 'Усть-Каменогорск', 'region_id' => 17 ],
        [ 'id' => 59, 'title' => 'Серебрянск', 'region_id' => 17 ],
        [ 'id' => 58, 'title' => 'Семей', 'region_id' => 17 ],
        [ 'id' => 52, 'title' => 'Риддер', 'region_id' => 17 ],
        [ 'id' => 43, 'title' => 'Курчатов', 'region_id' => 17 ],
        [ 'id' => 29, 'title' => 'Зыряновск', 'region_id' => 17 ],
        [ 'id' => 28, 'title' => 'Зайсан', 'region_id' => 17 ],
        [ 'id' => 15, 'title' => 'Аягоз', 'region_id' => 17 ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert($this->cities);
    }
}
