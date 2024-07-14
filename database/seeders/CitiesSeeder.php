<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Алматы',
            'Астана',
            'Шымкент',
            'Актобе',
            'Караганда',
            'Тараз',
            'Оскемен',
            'Павлодар',
            'Атырау',
            'Семей',
            'Кызылорда',
            'Актау',
            'Костанай',
            'Уральск',
            'Туркестан',
            'Петропавл',
            'Кокшетау',
            'Темиртау',
            'Талдыкорган',
            'Экибастуз',
            'Рудный',
            'Жезказган',
            'Каскелен',
            'Байконур',
            'Жанаозен',
            'Кентау',
            'Балхаш',
            'Сатпаев',
            'Кульсары',
            'Талгар',
            'Сарыагаш',
            'Конаев',
        ];

        foreach ($cities as $cityName) {
            Cities::create(['name' => $cityName]);
        }
    }
}
