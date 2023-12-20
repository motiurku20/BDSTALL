<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category2 = Category::find(2);
        $products = [
           
        ];
        foreach ($products as $key => $value) {
            $category2->products()->create($value);
        }

        // __________________________________________________

        $category1 = Category::find(1);
        $products = [
           
        ];
        foreach ($products as $key => $value) {
            $category1->products()->create($value);
        }

        // ________________________________________________________

        $category3 = Category::find(3);
        $products = [
           
        ];
        foreach ($products as $key => $value) {
            $category3->products()->create($value);
        }
    }
}
