<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $name = $faker->name;
        DB::table('product')->insert([
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'size' => $faker->randomDigitNotNull,
            'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'discount' => $faker->randomDigitNotNull,
            'discount_price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'unit' => 'шт',
            'warehouse' => $faker->randomDigitNotNull,
            'present' => '1',
            'action' => '1',
            'sale' => '1',
            'new' => '1',
            'bestseller' => '1',
            'photo1' => Str::random(10) . '.img',
            'photo2' => Str::random(10) . '.img',
            'photo3' => Str::random(10) . '.img',
            'photo4' => Str::random(10) . '.img',
            'photo5' => Str::random(10) . '.img',
            'user_id' => $faker->randomDigitNotNull,
            'category_id' => $faker->randomDigitNotNull,
        ]);
        $name = $faker->name;
        DB::table('product')->insert([
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'size' => $faker->randomDigitNotNull,
            'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'discount' => $faker->randomDigitNotNull,
            'discount_price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'unit' => 'шт',
            'warehouse' => $faker->randomDigitNotNull,
            'present' => '1',
            'action' => '1',
            'sale' => '1',
            'new' => '1',
            'bestseller' => '1',
//            'photo1' => $faker->image($dir = '/', $width = 640, $height = 480),
//            'photo2' => $faker->image($dir = '/', $width = 640, $height = 480),
//            'photo3' => $faker->image($dir = '/', $width = 640, $height = 480),
//            'photo4' => $faker->image($dir = '/', $width = 640, $height = 480),
//            'photo5' => $faker->image($dir = '/', $width = 640, $height = 480),
            'photo1' => Str::random(10) . '.img',
            'photo2' => Str::random(10) . '.img',
            'photo3' => Str::random(10) . '.img',
            'photo4' => Str::random(10) . '.img',
            'photo5' => Str::random(10) . '.img',

            'user_id' => $faker->randomDigitNotNull,
            'category_id' => $faker->randomDigitNotNull,
        ]);
        $name = $faker->name;
        DB::table('product')->insert([
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'size' => $faker->randomDigitNotNull,
            'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'discount' => $faker->randomDigitNotNull,
            'discount_price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'unit' => 'шт',
            'warehouse' => $faker->randomDigitNotNull,
            'present' => '1',
            'action' => '1',
            'sale' => '1',
            'new' => '1',
            'bestseller' => '1',
            'photo1' => Str::random(10) . '.img',
            'photo2' => Str::random(10) . '.img',
            'photo3' => Str::random(10) . '.img',
            'photo4' => Str::random(10) . '.img',
            'photo5' => Str::random(10) . '.img',
            'user_id' => $faker->randomDigitNotNull,
            'category_id' => $faker->randomDigitNotNull,
        ]);
        $name = $faker->name;
        DB::table('product')->insert([
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'size' => $faker->randomDigitNotNull,
            'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'discount' => $faker->randomDigitNotNull,
            'discount_price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'unit' => 'шт',
            'warehouse' => $faker->randomDigitNotNull,
            'present' => '1',
            'action' => '1',
            'sale' => '1',
            'new' => '1',
            'bestseller' => '1',
            'photo1' => Str::random(10) . '.img',
            'photo2' => Str::random(10) . '.img',
            'photo3' => Str::random(10) . '.img',
            'photo4' => Str::random(10) . '.img',
            'photo5' => Str::random(10) . '.img',
            'user_id' => $faker->randomDigitNotNull,
            'category_id' => $faker->randomDigitNotNull,
        ]);
        $name = $faker->name;
        DB::table('product')->insert([
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'size' => $faker->randomDigitNotNull,
            'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'discount' => $faker->randomDigitNotNull,
            'discount_price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'unit' => 'шт',
            'warehouse' => $faker->randomDigitNotNull,
            'present' => '1',
            'action' => '1',
            'sale' => '1',
            'new' => '1',
            'bestseller' => '1',
            'photo1' => Str::random(10) . '.img',
            'photo2' => Str::random(10) . '.img',
            'photo3' => Str::random(10) . '.img',
            'photo4' => Str::random(10) . '.img',
            'photo5' => Str::random(10) . '.img',
            'user_id' => $faker->randomDigitNotNull,
            'category_id' => $faker->randomDigitNotNull,
        ]);
        $name = $faker->name;
        DB::table('product')->insert([
            'name' => $name,
            'slug' => Str::slug($name),
            'title' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'size' => $faker->randomDigitNotNull,
            'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'discount' => $faker->randomDigitNotNull,
            'discount_price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'unit' => 'шт',
            'warehouse' => $faker->randomDigitNotNull,
            'present' => '1',
            'action' => '1',
            'sale' => '1',
            'new' => '1',
            'bestseller' => '1',
            'photo1' => Str::random(10) . '.img',
            'photo2' => Str::random(10) . '.img',
            'photo3' => Str::random(10) . '.img',
            'photo4' => Str::random(10) . '.img',
            'photo5' => Str::random(10) . '.img',
            'user_id' => $faker->randomDigitNotNull,
            'category_id' => $faker->randomDigitNotNull,
        ]);
    }
}
