<?php

use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => 'Владелец',
            'email' => 'owner@larux.ru',
            'password' => Hash::make('larux'),
        ]);
        User::create([
            'name' => 'Администратор',
            'email' => 'admin@larux.ru',
            'password' => Hash::make('larux'),
        ]);
        User::create([
            'name' => 'Менеджер',
            'email' => 'manager@larux.ru',
            'password' => Hash::make('larux'),
        ]);
        User::create([
            'name' => 'Редактор',
            'email' => 'editor@larux.ru',
            'password' => Hash::make('larux'),
        ]);
        User::create([
            'name' => 'Пользователь',
            'email' => 'user@larux.ru',
            'password' => Hash::make('larux'),
        ]);
        User::create([
            'name' => 'Гость',
            'email' => 'visitor@larux.ru',
            'password' => Hash::make('larux'),
        ]);

//        $ownerRole = Role::findByName(\App\Laravue\Acl::ROLE_OWNER);
//        $adminRole = Role::findByName(\App\Laravue\Acl::ROLE_ADMIN);
//        $managerRole = Role::findByName(\App\Laravue\Acl::ROLE_MANAGER);
//        $editorRole = Role::findByName(\App\Laravue\Acl::ROLE_EDITOR);
//        $userRole = Role::findByName(\App\Laravue\Acl::ROLE_USER);
//        $visitorRole = Role::findByName(\App\Laravue\Acl::ROLE_VISITOR);
//
//        $owner->syncRoles($ownerRole);
//        $admin->syncRoles($adminRole);
//        $manager->syncRoles($managerRole);
//        $editor->syncRoles($editorRole);
//        $user->syncRoles($userRole);
//        $visitor->syncRoles($visitorRole);


//        DB::table('users')->insert([
//            'name' => $faker->firstNameFemale,
//            'email' => $faker->email,
//            'password' => Hash::make('larux'),
//        ]);
//        DB::table('users')->insert([
//            'name' => $faker->firstNameMale,
//            'email' => $faker->email,
//            'password' => Hash::make('larux'),
//        ]);
//        DB::table('users')->insert([
//            'name' => $faker->firstNameFemale,
//            'email' => $faker->email,
//            'password' => Hash::make('larux'),
//        ]);
//        DB::table('users')->insert([
//            'name' => $faker->firstNameMale,
//            'email' => $faker->email,
//            'password' => Hash::make('larux'),
//        ]);
//        DB::table('users')->insert([
//            'name' => $faker->firstNameFemale,
//            'email' => $faker->email,
//            'password' => Hash::make('larux'),
//        ]);
//        DB::table('users')->insert([
//            'name' => $faker->firstNameMale,
//            'email' => $faker->email,
//            'password' => Hash::make('larux'),
//        ]);
    }
}
