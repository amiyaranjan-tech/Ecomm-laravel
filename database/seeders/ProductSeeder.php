<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
            [
                'name'=>'Samsung Smart LED Tv',
                "price"=>"40000",
                "description"=>"Samsung 108 cm (43 inches) Crystal iSmart 4K Ultra HD Smart LED TV UA43CUE60AKLXL (Black)",
                "category"=>"tv",
                "gallery"=>"https://m.media-amazon.com/images/I/71S8qt+K8hL._AC_UF1000,1000_QL80_.jpg"
            ],
            [
                'name'=>'IQOO Neo 7',
                "price"=>"30000",
                "description"=>"iQOO Neo 7 5G (Frost Blue, 8GB RAM, 128GB Storage) | Dimensity 8200, only 4nm Processor in The Segment | 50% Charge in 10 mins | Motion Control & 90 FPS Gaming",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/61JS7lF2aqL._SL1200_.jpg"
            ],
            [
                'name'=>'Lenovo Ideapad Gaming',
                "price"=>"50000",
                "description"=>"Lenovo IdeaPad Gaming 3 Intel Core i5-11320H 15.6(39.62cm)",
                "category"=>"laptop",
                "gallery"=>"https://m.media-amazon.com/images/I/61H5nnM7ZBL._SL1080_.jpg"
            ],
            [
                'name'=>'Apple iPad',
                "price"=>"76000",
                "description"=>"Apple 2022 11-inch iPad Pro (Wi-Fi, 128GB) - Space Grey (4th Generation)",
                "category"=>"ipad",
                "gallery"=>"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-pro-finish-select-202212-12-9inch-space-gray-wifi_FMT_WHH?wid=1280&hei=720&fmt=jpeg&qlt=90&.v=1670865949310"
            ],
            [
                'name'=>'Whirlpool Fridge',
                "price"=>"13000",
                "description"=>"184 L 2 Star Direct-Cool Single Door Refrigerator (205 WDE PRM 2S SAPPHIRE BLOOM-Z, 2023 Model)",
                "category"=>"fridge",
                "gallery"=>"https://m.media-amazon.com/images/I/61fGK+1+4PL.jpg"
            ],
            [
                'name'=>'CARRIER AC',
                "price"=>"35000",
                "description"=>"CARRIER 2023 Model 1.5 Ton 4 Star Split Inverter AC - White  ",
                "category"=>"ac",
                "gallery"=>"https://carriermideaindia.com/wp-content/uploads/2023/01/Mandatory_Emperia-Dx-3Star-1.5Ton_2-copy-1.jpg"
            ],
            [
                'name'=>'Maharaja Mixer Grinder',
                "price"=>"13000",
                "description"=>"Maharaja Whiteline MG 123, 500W Mixer Grinder with 3 Jars",
                "category"=>"mixer",
                "gallery"=>"https://cdn.moglix.com/p/HVPJhZZXCd0Mc-xxlarge.jpg"
            ],
            [
                'name'=>'Skybags Backpack',
                "price"=>"1500",
                "description"=>"Skybags One Size Brat Blue 46 Cms Casual Backpack",
                "category"=>"mixer",
                "gallery"=>"https://assets.ajio.com/medias/sys_master/root/20220519/mYq6/6286296ff997dd03e2f1c8b6/-1117Wx1400H-469200723-seagreen-MODEL.jpg"
            ],
            [
                'name'=>'Philips',
                "price"=>"2000",
                "description"=>"PHILIPS Men's BT310/15 Beard Trimmer with Lift and Trim System of Runtime: 45 min",
                "category"=>"trimmer",
                "gallery"=>"https://d2xamzlzrdbdbn.cloudfront.net/products/319eb899-b6a7-446e-8592-138e0f234a88_416x416.jpg"
            ],
            [
                'name'=>'Winter Jackets',
                "price"=>"2500",
                "description"=>"Stylish Men's Bomber Puffer Jacket - Warm Winter Coat for Trendy Fashion",
                "category"=>"jacket",
                "gallery"=>"https://imagescdn.thecollective.in/img/app/product/6/683127-7214343.jpg"
            ]
            
        ]);
    }
}
