<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'test',
            'user_type_id' =>1,
            'locale_id' =>1,
            'email' => 'test@test.ru',
            'password' => Hash::make('password'),
        ]);

        DB::table('locales')->insert([
            'name' => 'ru',
        ]);

        DB::table('locales')->insert([
            'name' => 'en',
        ]);
            DB::table('locales')->insert([
            'name' => 'cn',
        ]);


        DB::table('types')->insert([
            'name' => 'Недвижимость',
        ]);
        DB::table('types')->insert([
            'name' => ' Предприятие',
        ]);
        DB::table('deals')->insert([
            'name' => 'Продажа',
        ]);
        DB::table('deals')->insert([
            'name' => 'Инвестиционный проект',
        ]);

        DB::table('currencies')->insert([
            'name' => '$',
        ]);
        DB::table('currencies')->insert([
            'name' => '€',
        ]);

         User::factory(100)->create();
         Building::factory(8000)->create();

    }
}
