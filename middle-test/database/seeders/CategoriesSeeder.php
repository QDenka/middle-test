<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Техника'
            ],
            [
                'name' => 'Политика'
            ],
            [
                'name' => 'Бизнес'
            ],
            [
                'name' => 'Животные'
            ]
        );
    }
}
