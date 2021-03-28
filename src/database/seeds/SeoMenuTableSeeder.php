<?php

use Illuminate\Database\Seeder;

class SeoMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo')->insert([
            'title' => 'Главная',
            'description' => 'Главная страница сайта компании',
            'menu_id' => '1',
        ]);
        DB::table('seo')->insert([
            'title' => 'Каталог',
            'description' => 'Каталог нашей компании',
            'menu_id' => '2',
        ]);
        DB::table('seo')->insert([
            'title' => 'Блог',
            'description' => 'Блог нашей компании',
            'menu_id' => '3',
        ]);
        DB::table('seo')->insert([
            'title' => 'Услуги',
            'description' => 'Информация о наших услугах',
            'menu_id' => '4',
        ]);
        DB::table('seo')->insert([
            'title' => 'О нас',
            'description' => 'Информация о нашей компании',
            'menu_id' => '5',
        ]);
        DB::table('seo')->insert([
            'title' => 'Контакты',
            'description' => 'Главная страница сайта компании',
            'menu_id' => '6',
        ]);
    }
}
