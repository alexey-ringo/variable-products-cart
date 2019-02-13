<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889001,
            'name' => 'Желтая XS',
            'images' => [
                            'image1' => 'default/3_1_1.jpg',
                            'image2' => 'default/3_1_2.jpg',
                            'image3' => 'default/3_1_3.jpg',
                            'image4' => 'default/3_1_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889002,
            'name' => 'Желтая S',
            'images' => [
                            'image1' => 'default/3_1_1.jpg',
                            'image2' => 'default/3_1_2.jpg',
                            'image3' => 'default/3_1_3.jpg',
                            'image4' => 'default/3_1_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889003,
            'name' => 'Желтая M',
            'images' => [
                            'image1' => 'default/3_1_1.jpg',
                            'image2' => 'default/3_1_2.jpg',
                            'image3' => 'default/3_1_3.jpg',
                            'image4' => 'default/3_1_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889004,
            'name' => 'Желтая L',
            'images' => [
                            'image1' => 'default/3_1_1.jpg',
                            'image2' => 'default/3_1_2.jpg',
                            'image3' => 'default/3_1_3.jpg',
                            'image4' => 'default/3_1_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889005,
            'name' => 'Желтая XL',
            'images' => [
                            'image1' => 'default/3_1_1.jpg',
                            'image2' => 'default/3_1_2.jpg',
                            'image3' => 'default/3_1_3.jpg',
                            'image4' => 'default/3_1_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889006,
            'name' => 'Бежевая XS',
            'images' => [
                            'image1' => 'default/3_2_1.jpg',
                            'image2' => 'default/3_2_2.jpg',
                            'image3' => 'default/3_2_3.jpg',
                            'image4' => 'default/3_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889007,
            'name' => 'Бежевая S',
            'images' => [
                            'image1' => 'default/3_2_1.jpg',
                            'image2' => 'default/3_2_2.jpg',
                            'image3' => 'default/3_2_3.jpg',
                            'image4' => 'default/3_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889008,
            'name' => 'Бежевая M',
            'images' => [
                            'image1' => 'default/3_2_1.jpg',
                            'image2' => 'default/3_2_2.jpg',
                            'image3' => 'default/3_2_3.jpg',
                            'image4' => 'default/3_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889009,
            'name' => 'Бежевая L',
            'images' => [
                            'image1' => 'default/3_2_1.jpg',
                            'image2' => 'default/3_2_2.jpg',
                            'image3' => 'default/3_2_3.jpg',
                            'image4' => 'default/3_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889010,
            'name' => 'Бежевая XL',
            'images' => [
                            'image1' => 'default/3_2_1.jpg',
                            'image2' => 'default/3_2_2.jpg',
                            'image3' => 'default/3_2_3.jpg',
                            'image4' => 'default/3_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        //10
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889011,
            'name' => 'Черная S',
            'images' => [
                            'image1' => 'default/4_1_1.jpg',
                            'image2' => 'default/4_1_2.jpg',
                            'image3' => 'default/4_1_3.jpg',
                            'image4' => 'default/4_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889012,
            'name' => 'Черная M',
            'images' => [
                            'image1' => 'default/4_1_1.jpg',
                            'image2' => 'default/4_1_2.jpg',
                            'image3' => 'default/4_1_3.jpg',
                            'image4' => 'default/4_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889013,
            'name' => 'Черная L',
            'images' => [
                            'image1' => 'default/4_1_1.jpg',
                            'image2' => 'default/4_1_2.jpg',
                            'image3' => 'default/4_1_3.jpg',
                            'image4' => 'default/4_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889014,
            'name' => 'Белая S',
            'images' => [
                            'image1' => 'default/4_2_1.jpg',
                            'image2' => 'default/4_2_2.jpg',
                            'image3' => 'default/4_2_3.jpg',
                            'image4' => 'default/4_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889015,
            'name' => 'Белая M',
            'images' => [
                            'image1' => 'default/4_2_1.jpg',
                            'image2' => 'default/4_2_2.jpg',
                            'image3' => 'default/4_2_3.jpg',
                            'image4' => 'default/4_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889016,
            'name' => 'Белая L',
            'images' => [
                            'image1' => 'default/4_2_1.jpg',
                            'image2' => 'default/4_2_2.jpg',
                            'image3' => 'default/4_2_3.jpg',
                            'image4' => 'default/4_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        //16
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889017,
            'name' => 'Розовая S',
            'images' => [
                            'image1' => 'default/5_1_1.jpg',
                            'image2' => 'default/5_1_2.jpg',
                            'image3' => 'default/5_1_3.jpg',
                            'image4' => 'default/5_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889018,
            'name' => 'Розовая M',
            'images' => [
                            'image1' => 'default/5_1_1.jpg',
                            'image2' => 'default/5_1_2.jpg',
                            'image3' => 'default/5_1_3.jpg',
                            'image4' => 'default/5_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 6,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889019,
            'name' => 'Розовая L',
            'images' => [
                            'image1' => 'default/5_1_1.jpg',
                            'image2' => 'default/5_1_2.jpg',
                            'image3' => 'default/5_1_3.jpg',
                            'image4' => 'default/5_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889020,
            'name' => 'Серая S',
            'images' => [
                            'image1' => 'default/5_2_1.jpg',
                            'image2' => 'default/5_2_2.jpg',
                            'image3' => 'default/5_2_3.jpg',
                            'image4' => 'default/5_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889021,
            'name' => 'Серая M',
            'images' => [
                            'image1' => 'default/5_2_1.jpg',
                            'image2' => 'default/5_2_2.jpg',
                            'image3' => 'default/5_2_3.jpg',
                            'image4' => 'default/5_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889022,
            'name' => 'Серая L',
            'images' => [
                            'image1' => 'default/5_2_1.jpg',
                            'image2' => 'default/5_2_2.jpg',
                            'image3' => 'default/5_2_3.jpg',
                            'image4' => 'default/5_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        //22
        
         Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889023,
            'name' => 'Темно-синяя S',
            'images' => [
                            'image1' => 'default/6_1_1.jpg',
                            'image2' => 'default/6_1_2.jpg',
                            'image3' => 'default/6_1_3.jpg',
                            'image4' => 'default/6_1_4.jpg'
                        ],
            'color_id' => 5,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889024,
            'name' => 'Темно-синяя M',
            'images' => [
                            'image1' => 'default/6_1_1.jpg',
                            'image2' => 'default/6_1_2.jpg',
                            'image3' => 'default/6_1_3.jpg',
                            'image4' => 'default/6_1_4.jpg'
                        ],
            'color_id' => 5,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889025,
            'name' => 'Темно-синяя L',
            'images' => [
                            'image1' => 'default/6_1_1.jpg',
                            'image2' => 'default/6_1_2.jpg',
                            'image3' => 'default/6_1_3.jpg',
                            'image4' => 'default/6_1_4.jpg'
                        ],
            'color_id' => 5,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889026,
            'name' => 'Красная S',
            'images' => [
                            'image1' => 'default/6_2_1.jpg',
                            'image2' => 'default/6_2_2.jpg',
                            'image3' => 'default/6_2_3.jpg',
                            'image4' => 'default/6_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889027,
            'name' => 'Красная M',
            'images' => [
                            'image1' => 'default/6_2_1.jpg',
                            'image2' => 'default/6_2_2.jpg',
                            'image3' => 'default/6_2_3.jpg',
                            'image4' => 'default/6_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889028,
            'name' => 'Красная L',
            'images' => [
                            'image1' => 'default/6_2_1.jpg',
                            'image2' => 'default/6_2_2.jpg',
                            'image3' => 'default/6_2_3.jpg',
                            'image4' => 'default/6_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        //28
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889029,
            'name' => 'Бежевая S',
            'images' => [
                            'image1' => 'default/6_3_1.jpg',
                            'image2' => 'default/6_3_2.jpg',
                            'image3' => 'default/6_3_3.jpg',
                            'image4' => 'default/6_3_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889030,
            'name' => 'Бежевая M',
            'images' => [
                            'image1' => 'default/6_3_1.jpg',
                            'image2' => 'default/6_3_2.jpg',
                            'image3' => 'default/6_3_3.jpg',
                            'image4' => 'default/6_3_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889031,
            'name' => 'Бежевая L',
            'images' => [
                            'image1' => 'default/6_3_1.jpg',
                            'image2' => 'default/6_3_2.jpg',
                            'image3' => 'default/6_3_3.jpg',
                            'image4' => 'default/6_3_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889032,
            'name' => 'Черная S',
            'images' => [
                            'image1' => 'default/6_4_1.jpg',
                            'image2' => 'default/6_4_2.jpg',
                            'image3' => 'default/6_4_3.jpg',
                            'image4' => 'default/6_4_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 4,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889033,
            'name' => 'Черная M',
            'images' => [
                            'image1' => 'default/6_4_1.jpg',
                            'image2' => 'default/6_4_2.jpg',
                            'image3' => 'default/6_4_3.jpg',
                            'image4' => 'default/6_4_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889034,
            'name' => 'Черная L',
            'images' => [
                            'image1' => 'default/6_4_1.jpg',
                            'image2' => 'default/6_4_2.jpg',
                            'image3' => 'default/6_4_3.jpg',
                            'image4' => 'default/6_4_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 5,
        ]);
    }
}
