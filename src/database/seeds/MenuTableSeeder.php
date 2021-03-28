<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'name' => 'Главная',
            'slug' => Str::slug('Главная')
        ]);
        DB::table('menu')->insert([
            'name' => 'Каталог',
            'slug' => Str::slug('Каталог')
        ]);
        DB::table('menu')->insert([
            'name' => 'Услуги',
            'slug' => Str::slug('Услуги')
        ]);
        DB::table('menu')->insert([
            'name' => 'Цены',
            'slug' => Str::slug('Цены')
        ]);
        DB::table('menu')->insert([
            'name' => 'Блог',
            'slug' => Str::slug('Блог')
        ]);
        DB::table('menu')->insert([
            'name' => 'О нас',
            'slug' => Str::slug('О нас')
        ]);
        DB::table('menu')->insert([
            'name' => 'Контакты',
            'slug' => Str::slug('Контакты')
        ]);

    }
}
