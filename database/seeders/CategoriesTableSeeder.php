<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "title" => "Ceilings",
                "category_name" => "ceilings",
                "img_path" => "ceilings.jpg"
            ],
            [
                "title" => "Chandeliers",
                "category_name" => "chandeliers",
                "img_path" => "chandeliers.jpg"
            ],
            [
                "title" => "Table Lamps",
                "category_name" => "lamps",
                "img_path" => "lamps.jpg"
            ],
            [
                "title" => "Bulbs",
                "category_name" => "bulbs",
                "img_path" => "bulbs.jpg"
            ],
            [
                "title" => "Stands",
                "category_name" => "stands",
                "img_path" => "stands.jpg"
            ],
        ];

        foreach($categories as $category) {
            Category::create($category);
        }

    }
}
