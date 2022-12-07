<?php

namespace Database\Seeders;

use App\Models\Light;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $lights = [
            [
                "product_name" => "Outdoor Fairy Lights",
                "category_id" => "4",
                "file_path" => "outdoor-fairy-lights.jpg",
                "price" => "196"
            ],
            [
                "product_name" => "Solar waterproof G40 LED String Light",
                "category_id" => "4",
                "file_path" => "solar-waterproof-g40-led-string-light.jpg",
                "price" => "1599"
            ],
            [
                "product_name" => "Christmas String light G40",
                "category_id" => "4",
                "file_path" => "christmas-string-light-g40.jpg",
                "price" => "196"
            ],
            [
                "product_name" => "Sunset Light Rainbow Lamp",
                "category_id" => "4",
                "file_path" => "sunset-light-rainbow-lamp.jpg",
                "price" => "189"
            ],
            [
                "product_name" => "Light USB Rechargeable Garden Christmas fairy lights",
                "category_id" => "4",
                "file_path" => "light-usb-rechargeable-garden-christmas-fairy-lights.jpg",
                "price" => "1399"
            ],
            [
                "product_name" => "Crystal Chandelier Ceiling Lamp LED ",
                "category_id" => "1",
                "file_path" => "crystal-chandelier-ceiling-lamp-led.jpg",
                "price" => "134"
            ],
            [
                "product_name" => "Ceiling Light Modern Style 6 Light",
                "category_id" => "1",
                "file_path" => "ceiling-light-modern-style-6-light.jpg",
                "price" => "539"
            ],
            [
                "product_name" => "Exquisite living room lights",
                "category_id" => "1",
                "file_path" => "exquisite-living-room-lights.jpg",
                "price" => "218"
            ],
            [
                "product_name" => "3 Rings Tricolor Pendant Lamp",
                "category_id" => "2",
                "file_path" => "3-rings-tricolor-pendant-lamp.jpg",
                "price" => "1499"
            ],
            [
                "product_name" => "Tricolor Minimalistic Nordic Led Ceiling Light ",
                "category_id" => "2",
                "file_path" => "tricolor-minimalistic-nordic-led-ceiling-light.jpg",
                "price" => "775"
            ],
            [
                "product_name" => "Fabric Art Can Wood Table Lamp",
                "category_id" => "3",
                "file_path" => "fabric-art-can-wood-table-lamp.jpg",
                "price" => "249"
            ],
            [
                "product_name" => "Eye protection desk lamp LED",
                "category_id" => "3",
                "file_path" => "eye-protection-desk-lamp-led.jpg",
                "price" => "720"
            ],
            [
                "product_name" => "3D moon design night lamp table lamp",
                "category_id" => "3",
                "file_path" => "3d-moon-design-night-lamp-table-lamp.jpg",
                "price" => "88"
            ],
            [
                "product_name" => "Phone Stand Small Easel Pine Wood",
                "category_id" => "5",
                "file_path" => "phone-stand-small-easel-pine-wood.jpg",
                "price" => "15"
            ],

        ];


        foreach($lights as $light){
            Light::create($light);
        }
    }
}
