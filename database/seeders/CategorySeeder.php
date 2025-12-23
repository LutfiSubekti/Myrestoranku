<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
            $categories = [
            ['cat_name' => 'Food', 'description' => 'Food items'],
            ['cat_name' => 'Drink', 'description' => 'Beverages'],
            ['cat_name' => 'Dessert', 'description' => 'Dessert items'],
        ];

        DB::table('categories')->insert($categories);
    }
}
