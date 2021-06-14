<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => 'ru',
        ])->insert([
            'name' => 'en',
        ])->insert([
            'name' => 'cn',
        ]);
    }
}
