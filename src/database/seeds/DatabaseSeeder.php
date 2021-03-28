<?php

use App\Laravue\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuTableSeeder::class);
        $this->call(HeadTableSeeder::class);
        $this->call(RubricTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(SeoMenuTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
