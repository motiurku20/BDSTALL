<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $_categories = [
            [
                'name' => 'Electronics',
                'status' => 'Enabled'
            ],
            [
                'name' => 'Computer',
                'status' => 'Enabled'
            ],
            [
                'name' => 'Furniture',
                'status' => 'Enabled'
            ]
        ];
        foreach ($_categories as $key => $value) {
            Category::create($value);
        }
    }
}
