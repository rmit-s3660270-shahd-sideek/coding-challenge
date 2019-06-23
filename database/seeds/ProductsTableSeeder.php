<?php

    use Illuminate\Database\Seeder;

    class ProductsTableSeeder extends Seeder
    {
        public function run()
        {
            $products = [
                [
                    'name' => "MEN'S BLUE JACKET",
                    'description' => 'Blue Jacket for men that will you keep you warm in extreme conditions.',
                    'units' => 5,
                    'price' => 200.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "WOMEN'S PURPLE JACKET",
                    'description' => 'Purple jacket for women that will keeo you warm in extreme conditions.',
                    'units' => 10,
                    'price' => 300.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "WOMEN'S SINGLE-TRACK SHOE",
                    'description' => 'Single-track shoe for women. Great for hikes and treks.',
                    'units' => 37,
                    'price' => 378.00,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => 'Enduro Boa Hydration Pack',
                    'description' => 'High Utility backpack with ample compartments and extremely lightweight.',
                    'units' => 10,
                    'price' => 21.50,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => 'COLEMAN RIDGELINE HIKING TENT',
                    'description' => 'Three person hiking tent.',
                    'units' => 10,
                    'price' => 183.99,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => 'SINGLE POPUP ENSUITE',
                    'description' => 'Three person hiking tent.',
                    'units' => 10,
                    'price' => 71.99,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ]
            ];

            DB::table('products')->insert($products);
        }
    }
    