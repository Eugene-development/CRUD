<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('head')->insert([
            'name' => 'Раздел Каталога 1',
            'slug' => Str::slug('РазделКаталога1'),
            'menu_id' => '2'
        ]);
        DB::table('head')->insert([
            'name' => 'Раздел Каталога 2',
            'slug' => Str::slug('РазделКаталога2'),
            'menu_id' => '2'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Каталога 3',
            'slug' => Str::slug('РазделКаталога3'),
            'menu_id' => '2'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Блога 1',
            'slug' => Str::slug('Раздел Блога 1'),
            'menu_id' => '5'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Блога 2',
            'slug' => Str::slug('РазделБлога2'),
            'menu_id' => '5'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Блога 3',
            'slug' => Str::slug('РазделБлога3'),
            'menu_id' => '5'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Услуг 1',
            'slug' => Str::slug('РазделУслуг1'),
            'menu_id' => '3'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Услуг 2',
            'slug' => Str::slug('РазделУслуг2'),
            'menu_id' => '3'
        ]);

        DB::table('head')->insert([
            'name' => 'Раздел Услуг 3',
            'slug' => Str::slug('РазделУслуг3'),
            'menu_id' => '3'
        ]);

    }
}
