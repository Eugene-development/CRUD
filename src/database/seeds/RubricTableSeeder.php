<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RubricTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rubric')->insert([
            'name' => 'Рубрика Каталога 1',
            'slug' => Str::slug('РубрикаКаталога1'),
            'head_id' => '1'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Каталога 1',
            'slug' => Str::slug('РубрикаКаталога1'),
            'head_id' => '1'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Каталога 2',
            'slug' => Str::slug('РубрикаКаталога2'),
            'head_id' => '2'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Каталога 2',
            'slug' => Str::slug('РубрикаКаталога2'),
            'head_id' => '2'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Каталога 3',
            'slug' => Str::slug('РубрикаКаталога3'),
            'head_id' => '3'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Каталога 3',
            'slug' => Str::slug('РубрикаКаталога3'),
            'head_id' => '3'
        ]);

        DB::table('rubric')->insert([
            'name' => 'Рубрика Блога 1',
            'slug' => Str::slug('РубрикаБлога1'),
            'head_id' => '4'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Блога 1',
            'slug' => Str::slug('РубрикаБлога1'),
            'head_id' => '4'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Блога 2',
            'slug' => Str::slug('РубрикаБлога2'),
            'head_id' => '5'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Блога 2',
            'slug' => Str::slug('РубрикаБлога2'),
            'head_id' => '5'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Блога 3',
            'slug' => Str::slug('РубрикаБлога3'),
            'head_id' => '6'
        ]);
        DB::table('rubric')->insert([
            'name' => 'Рубрика Блога 3',
            'slug' => Str::slug('РубрикаБлога3'),
            'head_id' => '6'
        ]);


    }
}
