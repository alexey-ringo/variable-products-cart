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
        //Куртка из искусственной замши с бахромой
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889001,
            'name' => 'Желтая XS',
            'images' => [
                            '0' => 'default/3_1_1.jpg',
                            '1' => 'default/3_1_2.jpg',
                            '2' => 'default/3_1_3.jpg',
                            '3' => 'default/3_1_4.jpg'
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
                            '0' => 'default/3_1_1.jpg',
                            '1' => 'default/3_1_2.jpg',
                            '2' => 'default/3_1_3.jpg',
                            '3' => 'default/3_1_4.jpg'
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
                            '0' => 'default/3_1_1.jpg',
                            '1' => 'default/3_1_2.jpg',
                            '2' => 'default/3_1_3.jpg',
                            '3' => 'default/3_1_4.jpg'
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
                            '0' => 'default/3_1_1.jpg',
                            '1' => 'default/3_1_2.jpg',
                            '2' => 'default/3_1_3.jpg',
                            '3' => 'default/3_1_4.jpg'
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
                            '0' => 'default/3_1_1.jpg',
                            '1' => 'default/3_1_2.jpg',
                            '2' => 'default/3_1_3.jpg',
                            '3' => 'default/3_1_4.jpg'
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
                            '0' => 'default/3_2_1.jpg',
                            '1' => 'default/3_2_2.jpg',
                            '2' => 'default/3_2_3.jpg',
                            '3' => 'default/3_2_4.jpg'
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
                            '0' => 'default/3_2_1.jpg',
                            '1' => 'default/3_2_2.jpg',
                            '2' => 'default/3_2_3.jpg',
                            '3' => 'default/3_2_4.jpg'
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
                            '0' => 'default/3_2_1.jpg',
                            '1' => 'default/3_2_2.jpg',
                            '2' => 'default/3_2_3.jpg',
                            '3' => 'default/3_2_4.jpg'
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
                            '0' => 'default/3_2_1.jpg',
                            '1' => 'default/3_2_2.jpg',
                            '2' => 'default/3_2_3.jpg',
                            '3' => 'default/3_2_4.jpg'
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
                            '0' => 'default/3_2_1.jpg',
                            '1' => 'default/3_2_2.jpg',
                            '2' => 'default/3_2_3.jpg',
                            '3' => 'default/3_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        
        //Стеганная куртка из нейлона
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889011,
            'name' => 'Темно-синяя S',
            'images' => [
                            '0' => 'default/6_1_1.jpg',
                            '1' => 'default/6_1_2.jpg',
                            '2' => 'default/6_1_3.jpg',
                            '3' => 'default/6_1_4.jpg'
                        ],
            'color_id' => 5,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889012,
            'name' => 'Темно-синяя M',
            'images' => [
                            '0' => 'default/6_1_1.jpg',
                            '1' => 'default/6_1_2.jpg',
                            '2' => 'default/6_1_3.jpg',
                            '3' => 'default/6_1_4.jpg'
                        ],
            'color_id' => 5,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889013,
            'name' => 'Темно-синяя L',
            'images' => [
                            '0' => 'default/6_1_1.jpg',
                            '1' => 'default/6_1_2.jpg',
                            '2' => 'default/6_1_3.jpg',
                            '3' => 'default/6_1_4.jpg'
                        ],
            'color_id' => 5,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889014,
            'name' => 'Красная S',
            'images' => [
                            '0' => 'default/6_2_1.jpg',
                            '1' => 'default/6_2_2.jpg',
                            '2' => 'default/6_2_3.jpg',
                            '3' => 'default/6_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889015,
            'name' => 'Красная M',
            'images' => [
                            '0' => 'default/6_2_1.jpg',
                            '1' => 'default/6_2_2.jpg',
                            '2' => 'default/6_2_3.jpg',
                            '3' => 'default/6_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889016,
            'name' => 'Красная L',
            'images' => [
                            '0' => 'default/6_2_1.jpg',
                            '1' => 'default/6_2_2.jpg',
                            '2' => 'default/6_2_3.jpg',
                            '3' => 'default/6_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        //28
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889017,
            'name' => 'Бежевая S',
            'images' => [
                            '0' => 'default/6_3_1.jpg',
                            '1' => 'default/6_3_2.jpg',
                            '2' => 'default/6_3_3.jpg',
                            '3' => 'default/6_3_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889018,
            'name' => 'Бежевая M',
            'images' => [
                            '0' => 'default/6_3_1.jpg',
                            '1' => 'default/6_3_2.jpg',
                            '2' => 'default/6_3_3.jpg',
                            '3' => 'default/6_3_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889019,
            'name' => 'Бежевая L',
            'images' => [
                            '0' => 'default/6_3_1.jpg',
                            '1' => 'default/6_3_2.jpg',
                            '2' => 'default/6_3_3.jpg',
                            '3' => 'default/6_3_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889020,
            'name' => 'Черная S',
            'images' => [
                            '0' => 'default/6_4_1.jpg',
                            '1' => 'default/6_4_2.jpg',
                            '2' => 'default/6_4_3.jpg',
                            '3' => 'default/6_4_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 4,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889021,
            'name' => 'Черная M',
            'images' => [
                            '0' => 'default/6_4_1.jpg',
                            '1' => 'default/6_4_2.jpg',
                            '2' => 'default/6_4_3.jpg',
                            '3' => 'default/6_4_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889022,
            'name' => 'Черная L',
            'images' => [
                            '0' => 'default/6_4_1.jpg',
                            '1' => 'default/6_4_2.jpg',
                            '2' => 'default/6_4_3.jpg',
                            '3' => 'default/6_4_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 5,
        ]);
        
        
        
        //Укороченная куртка в байкерском стиле
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889023,
            'name' => 'Черная XS',
            'images' => [
                            '0' => 'default/7_1_1.jpg',
                            '1' => 'default/7_1_2.jpg',
                            '2' => 'default/7_1_3.jpg',
                            '3' => 'default/7_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889024,
            'name' => 'Черная S',
            'images' => [
                            '0' => 'default/7_1_1.jpg',
                            '1' => 'default/7_1_2.jpg',
                            '2' => 'default/7_1_3.jpg',
                            '3' => 'default/7_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889025,
            'name' => 'Черная M',
            'images' => [
                            '0' => 'default/7_1_1.jpg',
                            '1' => 'default/7_1_2.jpg',
                            '2' => 'default/7_1_3.jpg',
                            '3' => 'default/7_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889026,
            'name' => 'Черная L',
            'images' => [
                            '0' => 'default/7_1_1.jpg',
                            '1' => 'default/7_1_2.jpg',
                            '2' => 'default/7_1_3.jpg',
                            '3' => 'default/7_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889027,
            'name' => 'Черная XL',
            'images' => [
                            '0' => 'default/7_1_1.jpg',
                            '1' => 'default/7_1_2.jpg',
                            '2' => 'default/7_1_3.jpg',
                            '3' => 'default/7_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889028,
            'name' => 'Желтая XS',
            'images' => [
                            '0' => 'default/7_2_1.jpg',
                            '1' => 'default/7_2_2.jpg',
                            '2' => 'default/7_2_3.jpg',
                            '3' => 'default/7_2_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889029,
            'name' => 'Желтая S',
            'images' => [
                            '0' => 'default/7_2_1.jpg',
                            '1' => 'default/7_2_2.jpg',
                            '2' => 'default/7_2_3.jpg',
                            '3' => 'default/7_2_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889030,
            'name' => 'Желтая M',
            'images' => [
                            '0' => 'default/7_2_1.jpg',
                            '1' => 'default/7_2_2.jpg',
                            '2' => 'default/7_2_3.jpg',
                            '3' => 'default/7_2_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889031,
            'name' => 'Желтая L',
            'images' => [
                            '0' => 'default/7_2_1.jpg',
                            '1' => 'default/7_2_2.jpg',
                            '2' => 'default/7_2_3.jpg',
                            '3' => 'default/7_2_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889032,
            'name' => 'Желтая XL',
            'images' => [
                            '0' => 'default/7_2_1.jpg',
                            '1' => 'default/7_2_2.jpg',
                            '2' => 'default/7_2_3.jpg',
                            '3' => 'default/7_2_4.jpg'
                        ],
            'color_id' => 3,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Куртка из нейлона с капюшоном
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889033,
            'name' => 'Красная XS',
            'images' => [
                            '0' => 'default/9_1_1.jpg',
                            '1' => 'default/9_1_2.jpg',
                            '2' => 'default/9_1_3.jpg',
                            '3' => 'default/9_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889034,
            'name' => 'Красная S',
            'images' => [
                            '0' => 'default/9_1_1.jpg',
                            '1' => 'default/9_1_2.jpg',
                            '2' => 'default/9_1_3.jpg',
                            '3' => 'default/9_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889035,
            'name' => 'Красная M',
            'images' => [
                            '0' => 'default/9_1_1.jpg',
                            '1' => 'default/9_1_2.jpg',
                            '2' => 'default/9_1_3.jpg',
                            '3' => 'default/9_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889036,
            'name' => 'Красная L',
            'images' => [
                            '0' => 'default/9_1_1.jpg',
                            '1' => 'default/9_1_2.jpg',
                            '2' => 'default/9_1_3.jpg',
                            '3' => 'default/9_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889037,
            'name' => 'Красная XL',
            'images' => [
                            '0' => 'default/9_1_1.jpg',
                            '1' => 'default/9_1_2.jpg',
                            '2' => 'default/9_1_3.jpg',
                            '3' => 'default/9_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889038,
            'name' => 'Черная XS',
            'images' => [
                            '0' => 'default/9_2_1.jpg',
                            '1' => 'default/9_2_2.jpg',
                            '2' => 'default/9_2_3.jpg',
                            '3' => 'default/9_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889039,
            'name' => 'Черная S',
            'images' => [
                            '0' => 'default/9_2_1.jpg',
                            '1' => 'default/9_2_2.jpg',
                            '2' => 'default/9_2_3.jpg',
                            '3' => 'default/9_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889040,
            'name' => 'Черная M',
            'images' => [
                            '0' => 'default/9_2_1.jpg',
                            '1' => 'default/9_2_2.jpg',
                            '2' => 'default/9_2_3.jpg',
                            '3' => 'default/9_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889041,
            'name' => 'Черная L',
            'images' => [
                            '0' => 'default/9_2_1.jpg',
                            '1' => 'default/9_2_2.jpg',
                            '2' => 'default/9_2_3.jpg',
                            '3' => 'default/9_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889042,
            'name' => 'Черная XL',
            'images' => [
                            '0' => 'default/9_2_1.jpg',
                            '1' => 'default/9_2_2.jpg',
                            '2' => 'default/9_2_3.jpg',
                            '3' => 'default/9_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Джинсовая куртка оверсайз с эффектом потертости
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889043,
            'name' => 'Голубая XS',
            'images' => [
                            '0' => 'default/11_1_1.jpg',
                            '1' => 'default/11_1_2.jpg',
                            '2' => 'default/11_1_3.jpg',
                            '3' => 'default/11_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889044,
            'name' => 'Голубая S',
            'images' => [
                            '0' => 'default/11_1_1.jpg',
                            '1' => 'default/11_1_2.jpg',
                            '2' => 'default/11_1_3.jpg',
                            '3' => 'default/11_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889045,
            'name' => 'Голубая M',
            'images' => [
                            '0' => 'default/11_1_1.jpg',
                            '1' => 'default/11_1_2.jpg',
                            '2' => 'default/11_1_3.jpg',
                            '3' => 'default/11_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889046,
            'name' => 'Голубая L',
            'images' => [
                            '0' => 'default/11_1_1.jpg',
                            '1' => 'default/11_1_2.jpg',
                            '2' => 'default/11_1_3.jpg',
                            '3' => 'default/11_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889047,
            'name' => 'Голубая XL',
            'images' => [
                            '0' => 'default/11_1_1.jpg',
                            '1' => 'default/11_1_2.jpg',
                            '2' => 'default/11_1_3.jpg',
                            '3' => 'default/11_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889048,
            'name' => 'Синяя XS',
            'images' => [
                            '0' => 'default/11_2_1.jpg',
                            '1' => 'default/11_2_2.jpg',
                            '2' => 'default/11_2_3.jpg',
                            '3' => 'default/11_2_4.jpg'
                        ],
            'color_id' => 9,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889049,
            'name' => 'Синяя S',
            'images' => [
                            '0' => 'default/11_2_1.jpg',
                            '1' => 'default/11_2_2.jpg',
                            '2' => 'default/11_2_3.jpg',
                            '3' => 'default/11_2_4.jpg'
                        ],
            'color_id' => 9,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889050,
            'name' => 'Синяя M',
            'images' => [
                            '0' => 'default/11_2_1.jpg',
                            '1' => 'default/11_2_2.jpg',
                            '2' => 'default/11_2_3.jpg',
                            '3' => 'default/11_2_4.jpg'
                        ],
            'color_id' => 9,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889051,
            'name' => 'Синяя L',
            'images' => [
                            '0' => 'default/11_2_1.jpg',
                            '1' => 'default/11_2_2.jpg',
                            '2' => 'default/11_2_3.jpg',
                            '3' => 'default/11_2_4.jpg'
                        ],
            'color_id' => 9,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889052,
            'name' => 'Синяя XL',
            'images' => [
                            '0' => 'default/11_2_1.jpg',
                            '1' => 'default/11_2_2.jpg',
                            '2' => 'default/11_2_3.jpg',
                            '3' => 'default/11_2_4.jpg'
                        ],
            'color_id' => 9,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889053,
            'name' => 'Розовая XS',
            'images' => [
                            '0' => 'default/11_3_1.jpg',
                            '1' => 'default/11_3_2.jpg',
                            '2' => 'default/11_3_3.jpg',
                            '3' => 'default/11_3_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889054,
            'name' => 'Розовая S',
            'images' => [
                            '0' => 'default/11_3_1.jpg',
                            '1' => 'default/11_3_2.jpg',
                            '2' => 'default/11_3_3.jpg',
                            '3' => 'default/11_3_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889055,
            'name' => 'Розовая M',
            'images' => [
                            '0' => 'default/11_3_1.jpg',
                            '1' => 'default/11_3_2.jpg',
                            '2' => 'default/11_3_3.jpg',
                            '3' => 'default/11_3_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889056,
            'name' => 'Розовая L',
            'images' => [
                            '0' => 'default/11_3_1.jpg',
                            '1' => 'default/11_3_2.jpg',
                            '2' => 'default/11_3_3.jpg',
                            '3' => 'default/11_3_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 5,
            'sku' => 20128889057,
            'name' => 'Розовая XL',
            'images' => [
                            '0' => 'default/11_3_1.jpg',
                            '1' => 'default/11_3_2.jpg',
                            '2' => 'default/11_3_3.jpg',
                            '3' => 'default/11_3_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Куртка из нейлона серебристого цвета
        Product::create([
            'groupproduct_id' => 6,
            'sku' => 20128889058,
            'name' => 'Серебристая XS',
            'images' => [
                            '0' => 'default/12_1_1.jpg',
                            '1' => 'default/12_1_2.jpg',
                            '2' => 'default/12_1_3.jpg',
                            '3' => 'default/12_1_4.jpg'
                        ],
            'color_id' => 11,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 6,
            'sku' => 20128889059,
            'name' => 'Серебристая S',
            'images' => [
                            '0' => 'default/12_1_1.jpg',
                            '1' => 'default/12_1_2.jpg',
                            '2' => 'default/12_1_3.jpg',
                            '3' => 'default/12_1_4.jpg'
                        ],
            'color_id' => 11,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 6,
            'sku' => 20128889060,
            'name' => 'Серебристая M',
            'images' => [
                            '0' => 'default/12_1_1.jpg',
                            '1' => 'default/12_1_2.jpg',
                            '2' => 'default/12_1_3.jpg',
                            '3' => 'default/12_1_4.jpg'
                        ],
            'color_id' => 11,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 6,
            'sku' => 20128889061,
            'name' => 'Серебристая L',
            'images' => [
                            '0' => 'default/12_1_1.jpg',
                            '1' => 'default/12_1_2.jpg',
                            '2' => 'default/12_1_3.jpg',
                            '3' => 'default/12_1_4.jpg'
                        ],
            'color_id' => 11,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 6,
            'sku' => 20128889062,
            'name' => 'Серебристая XL',
            'images' => [
                            '0' => 'default/12_1_1.jpg',
                            '1' => 'default/12_1_2.jpg',
                            '2' => 'default/12_1_3.jpg',
                            '3' => 'default/12_1_4.jpg'
                        ],
            'color_id' => 11,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Куртка из искусственного меха с капюшоном и боковыми полосами
        Product::create([
            'groupproduct_id' => 7,
            'sku' => 20128889063,
            'name' => 'Бордовая XS',
            'images' => [
                            '0' => 'default/13_1_1.jpg',
                            '1' => 'default/13_1_2.jpg',
                            '2' => 'default/13_1_3.jpg',
                            '3' => 'default/13_1_4.jpg'
                        ],
            'color_id' => 12,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 7,
            'sku' => 20128889064,
            'name' => 'Бордовая S',
            'images' => [
                            '0' => 'default/13_1_1.jpg',
                            '1' => 'default/13_1_2.jpg',
                            '2' => 'default/13_1_3.jpg',
                            '3' => 'default/13_1_4.jpg'
                        ],
            'color_id' => 12,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 7,
            'sku' => 20128889065,
            'name' => 'Бордовая M',
            'images' => [
                            '0' => 'default/13_1_1.jpg',
                            '1' => 'default/13_1_2.jpg',
                            '2' => 'default/13_1_3.jpg',
                            '3' => 'default/13_1_4.jpg'
                        ],
            'color_id' => 12,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 7,
            'sku' => 20128889066,
            'name' => 'Бордовая L',
            'images' => [
                            '0' => 'default/13_1_1.jpg',
                            '1' => 'default/13_1_2.jpg',
                            '2' => 'default/13_1_3.jpg',
                            '3' => 'default/13_1_4.jpg'
                        ],
            'color_id' => 12,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 7,
            'sku' => 20128889067,
            'name' => 'Бордовая XL',
            'images' => [
                            '0' => 'default/13_1_1.jpg',
                            '1' => 'default/13_1_2.jpg',
                            '2' => 'default/13_1_3.jpg',
                            '3' => 'default/13_1_4.jpg'
                        ],
            'color_id' => 12,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Короткая куртка-бомбер из нейлона
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889068,
            'name' => 'Фуксия XS',
            'images' => [
                            '0' => 'default/14_1_1.jpg',
                            '1' => 'default/14_1_2.jpg',
                            '2' => 'default/14_1_3.jpg',
                            '3' => 'default/14_1_4.jpg'
                        ],
            'color_id' => 13,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889069,
            'name' => 'Фуксия S',
            'images' => [
                            '0' => 'default/14_1_1.jpg',
                            '1' => 'default/14_1_2.jpg',
                            '2' => 'default/14_1_3.jpg',
                            '3' => 'default/14_1_4.jpg'
                        ],
            'color_id' => 13,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889070,
            'name' => 'Фуксия M',
            'images' => [
                            '0' => 'default/14_1_1.jpg',
                            '1' => 'default/14_1_2.jpg',
                            '2' => 'default/14_1_3.jpg',
                            '3' => 'default/14_1_4.jpg'
                        ],
            'color_id' => 13,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889071,
            'name' => 'Фуксия L',
            'images' => [
                            '0' => 'default/14_1_1.jpg',
                            '1' => 'default/14_1_2.jpg',
                            '2' => 'default/14_1_3.jpg',
                            '3' => 'default/14_1_4.jpg'
                        ],
            'color_id' => 13,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889072,
            'name' => 'Фуксия XL',
            'images' => [
                            '0' => 'default/14_1_1.jpg',
                            '1' => 'default/14_1_2.jpg',
                            '2' => 'default/14_1_3.jpg',
                            '3' => 'default/14_1_4.jpg'
                        ],
            'color_id' => 13,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889073,
            'name' => 'Черная XS',
            'images' => [
                            '0' => 'default/14_2_1.jpg',
                            '1' => 'default/14_2_2.jpg',
                            '2' => 'default/14_2_3.jpg',
                            '3' => 'default/14_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889074,
            'name' => 'Черная S',
            'images' => [
                            '0' => 'default/14_2_1.jpg',
                            '1' => 'default/14_2_2.jpg',
                            '2' => 'default/14_2_3.jpg',
                            '3' => 'default/14_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889075,
            'name' => 'Черная M',
            'images' => [
                            '0' => 'default/14_2_1.jpg',
                            '1' => 'default/14_2_2.jpg',
                            '2' => 'default/14_2_3.jpg',
                            '3' => 'default/14_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889076,
            'name' => 'Черная L',
            'images' => [
                            '0' => 'default/14_2_1.jpg',
                            '1' => 'default/14_2_2.jpg',
                            '2' => 'default/14_2_3.jpg',
                            '3' => 'default/14_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 8,
            'sku' => 20128889077,
            'name' => 'Черная XL',
            'images' => [
                            '0' => 'default/14_2_1.jpg',
                            '1' => 'default/14_2_2.jpg',
                            '2' => 'default/14_2_3.jpg',
                            '3' => 'default/14_2_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Куртка в стиле сафари с карманами
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889078,
            'name' => 'Зеленая XS',
            'images' => [
                            '0' => 'default/15_1_1.jpg',
                            '1' => 'default/15_1_2.jpg',
                            '2' => 'default/15_1_3.jpg',
                            '3' => 'default/15_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889079,
            'name' => 'Зеленая S',
            'images' => [
                            '0' => 'default/15_1_1.jpg',
                            '1' => 'default/15_1_2.jpg',
                            '2' => 'default/15_1_3.jpg',
                            '3' => 'default/15_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889080,
            'name' => 'Зеленая M',
            'images' => [
                            '0' => 'default/15_1_1.jpg',
                            '1' => 'default/15_1_2.jpg',
                            '2' => 'default/15_1_3.jpg',
                            '3' => 'default/15_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889081,
            'name' => 'Зеленая L',
            'images' => [
                            '0' => 'default/15_1_1.jpg',
                            '1' => 'default/15_1_2.jpg',
                            '2' => 'default/15_1_3.jpg',
                            '3' => 'default/15_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889082,
            'name' => 'Зеленая XL',
            'images' => [
                            '0' => 'default/15_1_1.jpg',
                            '1' => 'default/15_1_2.jpg',
                            '2' => 'default/15_1_3.jpg',
                            '3' => 'default/15_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889083,
            'name' => 'Хаки XS',
            'images' => [
                            '0' => 'default/15_2_1.jpg',
                            '1' => 'default/15_2_2.jpg',
                            '2' => 'default/15_2_3.jpg',
                            '3' => 'default/15_2_4.jpg'
                        ],
            'color_id' => 15,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889084,
            'name' => 'Хаки S',
            'images' => [
                            '0' => 'default/15_2_1.jpg',
                            '1' => 'default/15_2_2.jpg',
                            '2' => 'default/15_2_3.jpg',
                            '3' => 'default/15_2_4.jpg'
                        ],
            'color_id' => 15,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889085,
            'name' => 'Хаки M',
            'images' => [
                            '0' => 'default/15_2_1.jpg',
                            '1' => 'default/15_2_2.jpg',
                            '2' => 'default/15_2_3.jpg',
                            '3' => 'default/15_2_4.jpg'
                        ],
            'color_id' => 15,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889086,
            'name' => 'Хаки L',
            'images' => [
                            '0' => 'default/15_2_1.jpg',
                            '1' => 'default/15_2_2.jpg',
                            '2' => 'default/15_2_3.jpg',
                            '3' => 'default/15_2_4.jpg'
                        ],
            'color_id' => 15,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 9,
            'sku' => 20128889087,
            'name' => 'Хаки XL',
            'images' => [
                            '0' => 'default/15_2_1.jpg',
                            '1' => 'default/15_2_2.jpg',
                            '2' => 'default/15_2_3.jpg',
                            '3' => 'default/15_2_4.jpg'
                        ],
            'color_id' => 15,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Куртка-ветровка из нейлона с капюшоном
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889088,
            'name' => 'Зеленая XS',
            'images' => [
                            '0' => 'default/16_1_1.jpg',
                            '1' => 'default/16_1_2.jpg',
                            '2' => 'default/16_1_3.jpg',
                            '3' => 'default/16_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889089,
            'name' => 'Зеленая S',
            'images' => [
                            '0' => 'default/16_1_1.jpg',
                            '1' => 'default/16_1_2.jpg',
                            '2' => 'default/16_1_3.jpg',
                            '3' => 'default/16_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889090,
            'name' => 'Зеленая M',
            'images' => [
                            '0' => 'default/16_1_1.jpg',
                            '1' => 'default/16_1_2.jpg',
                            '2' => 'default/16_1_3.jpg',
                            '3' => 'default/16_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889091,
            'name' => 'Зеленая L',
            'images' => [
                            '0' => 'default/16_1_1.jpg',
                            '1' => 'default/16_1_2.jpg',
                            '2' => 'default/16_1_3.jpg',
                            '3' => 'default/16_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889092,
            'name' => 'Зеленая XL',
            'images' => [
                            '0' => 'default/16_1_1.jpg',
                            '1' => 'default/16_1_2.jpg',
                            '2' => 'default/16_1_3.jpg',
                            '3' => 'default/16_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889093,
            'name' => 'Красная XS',
            'images' => [
                            '0' => 'default/16_2_1.jpg',
                            '1' => 'default/16_2_2.jpg',
                            '2' => 'default/16_2_3.jpg',
                            '3' => 'default/16_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889094,
            'name' => 'Красная S',
            'images' => [
                            '0' => 'default/16_2_1.jpg',
                            '1' => 'default/16_2_2.jpg',
                            '2' => 'default/16_2_3.jpg',
                            '3' => 'default/16_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889095,
            'name' => 'Красная M',
            'images' => [
                            '0' => 'default/16_2_1.jpg',
                            '1' => 'default/16_2_2.jpg',
                            '2' => 'default/16_2_3.jpg',
                            '3' => 'default/16_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889096,
            'name' => 'Красная L',
            'images' => [
                            '0' => 'default/16_2_1.jpg',
                            '1' => 'default/16_2_2.jpg',
                            '2' => 'default/16_2_3.jpg',
                            '3' => 'default/16_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 10,
            'sku' => 20128889097,
            'name' => 'Красная XL',
            'images' => [
                            '0' => 'default/16_2_1.jpg',
                            '1' => 'default/16_2_2.jpg',
                            '2' => 'default/16_2_3.jpg',
                            '3' => 'default/16_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Куртка из искусственной кожи
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889098,
            'name' => 'Красная XS',
            'images' => [
                            '0' => 'default/17_1_1.jpg',
                            '1' => 'default/17_1_2.jpg',
                            '2' => 'default/17_1_3.jpg',
                            '3' => 'default/17_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889099,
            'name' => 'Красная S',
            'images' => [
                            '0' => 'default/17_1_1.jpg',
                            '1' => 'default/17_1_2.jpg',
                            '2' => 'default/17_1_3.jpg',
                            '3' => 'default/17_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889100,
            'name' => 'Красная M',
            'images' => [
                            '0' => 'default/17_1_1.jpg',
                            '1' => 'default/17_1_2.jpg',
                            '2' => 'default/17_1_3.jpg',
                            '3' => 'default/17_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889101,
            'name' => 'Красная L',
            'images' => [
                            '0' => 'default/17_1_1.jpg',
                            '1' => 'default/17_1_2.jpg',
                            '2' => 'default/17_1_3.jpg',
                            '3' => 'default/17_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889102,
            'name' => 'Красная XL',
            'images' => [
                            '0' => 'default/17_1_1.jpg',
                            '1' => 'default/17_1_2.jpg',
                            '2' => 'default/17_1_3.jpg',
                            '3' => 'default/17_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889103,
            'name' => 'Белая XS',
            'images' => [
                            '0' => 'default/17_2_1.jpg',
                            '1' => 'default/17_2_2.jpg',
                            '2' => 'default/17_2_3.jpg',
                            '3' => 'default/17_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889104,
            'name' => 'Белая S',
            'images' => [
                            '0' => 'default/17_2_1.jpg',
                            '1' => 'default/17_2_2.jpg',
                            '2' => 'default/17_2_3.jpg',
                            '3' => 'default/17_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889105,
            'name' => 'Белая M',
            'images' => [
                            '0' => 'default/17_2_1.jpg',
                            '1' => 'default/17_2_2.jpg',
                            '2' => 'default/17_2_3.jpg',
                            '3' => 'default/17_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889106,
            'name' => 'Белая L',
            'images' => [
                            '0' => 'default/17_2_1.jpg',
                            '1' => 'default/17_2_2.jpg',
                            '2' => 'default/17_2_3.jpg',
                            '3' => 'default/17_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 11,
            'sku' => 20128889107,
            'name' => 'Белая XL',
            'images' => [
                            '0' => 'default/17_2_1.jpg',
                            '1' => 'default/17_2_2.jpg',
                            '2' => 'default/17_2_3.jpg',
                            '3' => 'default/17_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Байкерская куртка из искусственной замши
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889108,
            'name' => 'Белая XS',
            'images' => [
                            '0' => 'default/18_1_1.jpg',
                            '1' => 'default/18_1_2.jpg',
                            '2' => 'default/18_1_3.jpg',
                            '3' => 'default/18_1_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889109,
            'name' => 'Белая S',
            'images' => [
                            '0' => 'default/18_1_1.jpg',
                            '1' => 'default/18_1_2.jpg',
                            '2' => 'default/18_1_3.jpg',
                            '3' => 'default/18_1_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889110,
            'name' => 'Белая M',
            'images' => [
                            '0' => 'default/18_1_1.jpg',
                            '1' => 'default/18_1_2.jpg',
                            '2' => 'default/18_1_3.jpg',
                            '3' => 'default/18_1_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889111,
            'name' => 'Белая L',
            'images' => [
                            '0' => 'default/18_1_1.jpg',
                            '1' => 'default/18_1_2.jpg',
                            '2' => 'default/18_1_3.jpg',
                            '3' => 'default/18_1_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889112,
            'name' => 'Белая XL',
            'images' => [
                            '0' => 'default/18_1_1.jpg',
                            '1' => 'default/18_1_2.jpg',
                            '2' => 'default/18_1_3.jpg',
                            '3' => 'default/18_1_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889113,
            'name' => 'Зеленая XS',
            'images' => [
                            '0' => 'default/18_2_1.jpg',
                            '1' => 'default/18_2_2.jpg',
                            '2' => 'default/18_2_3.jpg',
                            '3' => 'default/18_2_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889114,
            'name' => 'Зеленая S',
            'images' => [
                            '0' => 'default/18_2_1.jpg',
                            '1' => 'default/18_2_2.jpg',
                            '2' => 'default/18_2_3.jpg',
                            '3' => 'default/18_2_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889115,
            'name' => 'Зеленая M',
            'images' => [
                            '0' => 'default/18_2_1.jpg',
                            '1' => 'default/18_2_2.jpg',
                            '2' => 'default/18_2_3.jpg',
                            '3' => 'default/18_2_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889116,
            'name' => 'Зеленая L',
            'images' => [
                            '0' => 'default/18_2_1.jpg',
                            '1' => 'default/18_2_2.jpg',
                            '2' => 'default/18_2_3.jpg',
                            '3' => 'default/18_2_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 12,
            'sku' => 20128889117,
            'name' => 'Зеленая XL',
            'images' => [
                            '0' => 'default/18_2_1.jpg',
                            '1' => 'default/18_2_2.jpg',
                            '2' => 'default/18_2_3.jpg',
                            '3' => 'default/18_2_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Базовая куртка-рубашка
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889118,
            'name' => 'Зеленая XS',
            'images' => [
                            '0' => 'default/19_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889119,
            'name' => 'Зеленая S',
            'images' => [
                            '0' => 'default/19_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889120,
            'name' => 'Зеленая M',
            'images' => [
                            '0' => 'default/19_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889121,
            'name' => 'Зеленая L',
            'images' => [
                            '0' => 'default/19_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889122,
            'name' => 'Зеленая XL',
            'images' => [
                            '0' => 'default/19_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889123,
            'name' => 'Бежевая XS',
            'images' => [
                            '0' => 'default/19_2_1.jpg',
                            '1' => 'default/19_2_2.jpg',
                            '2' => 'default/19_2_3.jpg',
                            '3' => 'default/19_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889124,
            'name' => 'Бежевая S',
            'images' => [
                            '0' => 'default/19_2_1.jpg',
                            '1' => 'default/19_2_2.jpg',
                            '2' => 'default/19_2_3.jpg',
                            '3' => 'default/19_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889125,
            'name' => 'Бежевая M',
            'images' => [
                            '0' => 'default/19_2_1.jpg',
                            '1' => 'default/19_2_2.jpg',
                            '2' => 'default/19_2_3.jpg',
                            '3' => 'default/19_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889126,
            'name' => 'Бежевая L',
            'images' => [
                            '0' => 'default/19_2_1.jpg',
                            '1' => 'default/19_2_2.jpg',
                            '2' => 'default/19_2_3.jpg',
                            '3' => 'default/19_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 13,
            'sku' => 20128889127,
            'name' => 'Бежевая XL',
            'images' => [
                            '0' => 'default/19_2_1.jpg',
                            '1' => 'default/19_2_2.jpg',
                            '2' => 'default/19_2_3.jpg',
                            '3' => 'default/19_2_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Шерстяное пальто с молниями
        Product::create([
            'groupproduct_id' => 14,
            'sku' => 20128889128,
            'name' => 'Бежевое XS',
            'images' => [
                            '0' => 'default/20_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 14,
            'sku' => 20128889129,
            'name' => 'Бежевое S',
            'images' => [
                            '0' => 'default/20_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 14,
            'sku' => 20128889130,
            'name' => 'Бежевое M',
            'images' => [
                            '0' => 'default/20_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 14,
            'sku' => 20128889131,
            'name' => 'Бежевое L',
            'images' => [
                            '0' => 'default/20_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 14,
            'sku' => 20128889132,
            'name' => 'Бежевое XL',
            'images' => [
                            '0' => 'default/20_1_1.jpg',
                            '1' => 'default/19_1_2.jpg',
                            '2' => 'default/19_1_3.jpg',
                            '3' => 'default/19_1_4.jpg'
                        ],
            'color_id' => 4,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Тренч из искусственной кожи
        Product::create([
            'groupproduct_id' => 15,
            'sku' => 20128889133,
            'name' => 'Красное XS',
            'images' => [
                            '0' => 'default/21_1_1.jpg',
                            '1' => 'default/21_1_2.jpg',
                            '2' => 'default/21_1_3.jpg',
                            '3' => 'default/21_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 15,
            'sku' => 20128889134,
            'name' => 'Красное S',
            'images' => [
                            '0' => 'default/21_1_1.jpg',
                            '1' => 'default/21_1_2.jpg',
                            '2' => 'default/21_1_3.jpg',
                            '3' => 'default/21_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 15,
            'sku' => 20128889135,
            'name' => 'Красное M',
            'images' => [
                            '0' => 'default/21_1_1.jpg',
                            '1' => 'default/21_1_2.jpg',
                            '2' => 'default/21_1_3.jpg',
                            '3' => 'default/21_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 15,
            'sku' => 20128889136,
            'name' => 'Красное L',
            'images' => [
                            '0' => 'default/21_1_1.jpg',
                            '1' => 'default/21_1_2.jpg',
                            '2' => 'default/21_1_3.jpg',
                            '3' => 'default/21_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 15,
            'sku' => 20128889137,
            'name' => 'Красное XL',
            'images' => [
                            '0' => 'default/21_1_1.jpg',
                            '1' => 'default/21_1_2.jpg',
                            '2' => 'default/21_1_3.jpg',
                            '3' => 'default/21_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Пиджак с подворачивающимися рукавами длиной 3/4
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889138,
            'name' => 'Черный XS',
            'images' => [
                            '0' => 'default/8_1_1.jpg',
                            '1' => 'default/8_1_2.jpg',
                            '2' => 'default/8_1_3.jpg',
                            '3' => 'default/8_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889139,
            'name' => 'Черный S',
            'images' => [
                            '0' => 'default/8_1_1.jpg',
                            '1' => 'default/8_1_2.jpg',
                            '2' => 'default/8_1_3.jpg',
                            '3' => 'default/8_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889140,
            'name' => 'Черный M',
            'images' => [
                            '0' => 'default/8_1_1.jpg',
                            '1' => 'default/8_1_2.jpg',
                            '2' => 'default/8_1_3.jpg',
                            '3' => 'default/8_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889141,
            'name' => 'Черный L',
            'images' => [
                            '0' => 'default/8_1_1.jpg',
                            '1' => 'default/8_1_2.jpg',
                            '2' => 'default/8_1_3.jpg',
                            '3' => 'default/8_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889142,
            'name' => 'Черный XL',
            'images' => [
                            '0' => 'default/8_1_1.jpg',
                            '1' => 'default/8_1_2.jpg',
                            '2' => 'default/8_1_3.jpg',
                            '3' => 'default/8_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889143,
            'name' => 'Красный XS',
            'images' => [
                            '0' => 'default/8_2_1.jpg',
                            '1' => 'default/8_2_2.jpg',
                            '2' => 'default/8_2_3.jpg',
                            '3' => 'default/8_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889144,
            'name' => 'Красный S',
            'images' => [
                            '0' => 'default/8_2_1.jpg',
                            '1' => 'default/8_2_2.jpg',
                            '2' => 'default/8_2_3.jpg',
                            '3' => 'default/8_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889145,
            'name' => 'Красный M',
            'images' => [
                            '0' => 'default/8_2_1.jpg',
                            '1' => 'default/8_2_2.jpg',
                            '2' => 'default/8_2_3.jpg',
                            '3' => 'default/8_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889146,
            'name' => 'Красный L',
            'images' => [
                            '0' => 'default/8_2_1.jpg',
                            '1' => 'default/8_2_2.jpg',
                            '2' => 'default/8_2_3.jpg',
                            '3' => 'default/8_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889147,
            'name' => 'Красный XL',
            'images' => [
                            '0' => 'default/8_2_1.jpg',
                            '1' => 'default/8_2_2.jpg',
                            '2' => 'default/8_2_3.jpg',
                            '3' => 'default/8_2_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889148,
            'name' => 'Серый XS',
            'images' => [
                            '0' => 'default/8_3_1.jpg',
                            '1' => 'default/8_3_2.jpg',
                            '2' => 'default/8_3_3.jpg',
                            '3' => 'default/8_3_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889149,
            'name' => 'Серый S',
            'images' => [
                            '0' => 'default/8_3_1.jpg',
                            '1' => 'default/8_3_2.jpg',
                            '2' => 'default/8_3_3.jpg',
                            '3' => 'default/8_3_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889150,
            'name' => 'Серый M',
            'images' => [
                            '0' => 'default/8_3_1.jpg',
                            '1' => 'default/8_3_2.jpg',
                            '2' => 'default/8_3_3.jpg',
                            '3' => 'default/8_3_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889151,
            'name' => 'Серый L',
            'images' => [
                            '0' => 'default/8_3_1.jpg',
                            '1' => 'default/8_3_2.jpg',
                            '2' => 'default/8_3_3.jpg',
                            '3' => 'default/8_3_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889152,
            'name' => 'Серый XL',
            'images' => [
                            '0' => 'default/8_3_1.jpg',
                            '1' => 'default/8_3_2.jpg',
                            '2' => 'default/8_3_3.jpg',
                            '3' => 'default/8_3_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889153,
            'name' => 'Розовый XS',
            'images' => [
                            '0' => 'default/8_4_1.jpg',
                            '1' => 'default/8_4_2.jpg',
                            '2' => 'default/8_4_3.jpg',
                            '3' => 'default/8_4_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889154,
            'name' => 'Розовый S',
            'images' => [
                            '0' => 'default/8_4_1.jpg',
                            '1' => 'default/8_4_2.jpg',
                            '2' => 'default/8_4_3.jpg',
                            '3' => 'default/8_4_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889155,
            'name' => 'Розовый M',
            'images' => [
                            '0' => 'default/8_4_1.jpg',
                            '1' => 'default/8_4_2.jpg',
                            '2' => 'default/8_4_3.jpg',
                            '3' => 'default/8_4_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889156,
            'name' => 'Розовый L',
            'images' => [
                            '0' => 'default/8_4_1.jpg',
                            '1' => 'default/8_4_2.jpg',
                            '2' => 'default/8_4_3.jpg',
                            '3' => 'default/8_4_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889157,
            'name' => 'Розовый XL',
            'images' => [
                            '0' => 'default/8_4_1.jpg',
                            '1' => 'default/8_4_2.jpg',
                            '2' => 'default/8_4_3.jpg',
                            '3' => 'default/8_4_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889158,
            'name' => 'Зеленый XS',
            'images' => [
                            '0' => 'default/8_5_1.jpg',
                            '1' => 'default/8_5_2.jpg',
                            '2' => 'default/8_5_3.jpg',
                            '3' => 'default/8_5_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889159,
            'name' => 'Зеленый S',
            'images' => [
                            '0' => 'default/8_5_1.jpg',
                            '1' => 'default/8_5_2.jpg',
                            '2' => 'default/8_5_3.jpg',
                            '3' => 'default/8_5_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889160,
            'name' => 'Зеленый M',
            'images' => [
                            '0' => 'default/8_5_1.jpg',
                            '1' => 'default/8_5_2.jpg',
                            '2' => 'default/8_5_3.jpg',
                            '3' => 'default/8_5_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889161,
            'name' => 'Зеленый L',
            'images' => [
                            '0' => 'default/8_5_1.jpg',
                            '1' => 'default/8_5_2.jpg',
                            '2' => 'default/8_5_3.jpg',
                            '3' => 'default/8_5_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 16,
            'sku' => 20128889162,
            'name' => 'Зеленый XL',
            'images' => [
                            '0' => 'default/8_5_1.jpg',
                            '1' => 'default/8_5_2.jpg',
                            '2' => 'default/8_5_3.jpg',
                            '3' => 'default/8_5_4.jpg'
                        ],
            'color_id' => 14,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Брюки-клеш из трикотажа в рубчик
        Product::create([
            'groupproduct_id' => 17,
            'sku' => 20128889163,
            'name' => 'Розовые XS',
            'images' => [
                            '0' => 'default/22_1_1.jpg',
                            '1' => 'default/22_1_2.jpg',
                            '2' => 'default/22_1_3.jpg',
                            '3' => 'default/22_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 17,
            'sku' => 20128889164,
            'name' => 'Розовые S',
            'images' => [
                            '0' => 'default/22_1_1.jpg',
                            '1' => 'default/22_1_2.jpg',
                            '2' => 'default/22_1_3.jpg',
                            '3' => 'default/22_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 17,
            'sku' => 20128889165,
            'name' => 'Розовые M',
            'images' => [
                            '0' => 'default/22_1_1.jpg',
                            '1' => 'default/22_1_2.jpg',
                            '2' => 'default/22_1_3.jpg',
                            '3' => 'default/22_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 17,
            'sku' => 20128889166,
            'name' => 'Розовые L',
            'images' => [
                            '0' => 'default/22_1_1.jpg',
                            '1' => 'default/22_1_2.jpg',
                            '2' => 'default/22_1_3.jpg',
                            '3' => 'default/22_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 17,
            'sku' => 20128889167,
            'name' => 'Розовые XL',
            'images' => [
                            '0' => 'default/22_1_1.jpg',
                            '1' => 'default/22_1_2.jpg',
                            '2' => 'default/22_1_3.jpg',
                            '3' => 'default/22_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Джинсы с эффектом пуш-ап и мягкой посадкой
        Product::create([
            'groupproduct_id' => 18,
            'sku' => 20128889168,
            'name' => 'Голубые XS',
            'images' => [
                            '0' => 'default/23_1_1.jpg',
                            '1' => 'default/23_1_2.jpg',
                            '2' => 'default/23_1_3.jpg',
                            '3' => 'default/23_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 18,
            'sku' => 20128889169,
            'name' => 'Голубые S',
            'images' => [
                            '0' => 'default/23_1_1.jpg',
                            '1' => 'default/23_1_2.jpg',
                            '2' => 'default/23_1_3.jpg',
                            '3' => 'default/23_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 18,
            'sku' => 20128889170,
            'name' => 'Голубые M',
            'images' => [
                            '0' => 'default/23_1_1.jpg',
                            '1' => 'default/23_1_2.jpg',
                            '2' => 'default/23_1_3.jpg',
                            '3' => 'default/23_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 18,
            'sku' => 20128889171,
            'name' => 'Голубые L',
            'images' => [
                            '0' => 'default/23_1_1.jpg',
                            '1' => 'default/23_1_2.jpg',
                            '2' => 'default/23_1_3.jpg',
                            '3' => 'default/23_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 18,
            'sku' => 20128889172,
            'name' => 'Голубые XL',
            'images' => [
                            '0' => 'default/23_1_1.jpg',
                            '1' => 'default/23_1_2.jpg',
                            '2' => 'default/23_1_3.jpg',
                            '3' => 'default/23_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Короткий джинсовый комбинезон
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889173,
            'name' => 'Голубой XS',
            'images' => [
                            '0' => 'default/24_1_1.jpg',
                            '1' => 'default/24_1_2.jpg',
                            '2' => 'default/24_1_3.jpg',
                            '3' => 'default/24_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889174,
            'name' => 'Голубой S',
            'images' => [
                            '0' => 'default/24_1_1.jpg',
                            '1' => 'default/24_1_2.jpg',
                            '2' => 'default/24_1_3.jpg',
                            '3' => 'default/24_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889175,
            'name' => 'Голубой M',
            'images' => [
                            '0' => 'default/24_1_1.jpg',
                            '1' => 'default/24_1_2.jpg',
                            '2' => 'default/24_1_3.jpg',
                            '3' => 'default/24_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889176,
            'name' => 'Голубой L',
            'images' => [
                            '0' => 'default/24_1_1.jpg',
                            '1' => 'default/24_1_2.jpg',
                            '2' => 'default/24_1_3.jpg',
                            '3' => 'default/24_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889177,
            'name' => 'Голубой XL',
            'images' => [
                            '0' => 'default/24_1_1.jpg',
                            '1' => 'default/24_1_2.jpg',
                            '2' => 'default/24_1_3.jpg',
                            '3' => 'default/24_1_4.jpg'
                        ],
            'color_id' => 10,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889178,
            'name' => 'Розовый XS',
            'images' => [
                            '0' => 'default/24_2_1.jpg',
                            '1' => 'default/24_2_2.jpg',
                            '2' => 'default/24_2_3.jpg',
                            '3' => 'default/24_2_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889179,
            'name' => 'Розовый S',
            'images' => [
                            '0' => 'default/24_2_1.jpg',
                            '1' => 'default/24_2_2.jpg',
                            '2' => 'default/24_2_3.jpg',
                            '3' => 'default/24_2_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889180,
            'name' => 'Розовый M',
            'images' => [
                            '0' => 'default/24_2_1.jpg',
                            '1' => 'default/24_2_2.jpg',
                            '2' => 'default/24_2_3.jpg',
                            '3' => 'default/24_2_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889181,
            'name' => 'Розовый L',
            'images' => [
                            '0' => 'default/24_2_1.jpg',
                            '1' => 'default/24_2_2.jpg',
                            '2' => 'default/24_2_3.jpg',
                            '3' => 'default/24_2_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 19,
            'sku' => 20128889182,
            'name' => 'Розовый XL',
            'images' => [
                            '0' => 'default/24_2_1.jpg',
                            '1' => 'default/24_2_2.jpg',
                            '2' => 'default/24_2_3.jpg',
                            '3' => 'default/24_2_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        //Юбка с принтом и воланами
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889183,
            'name' => 'Красная XS',
            'images' => [
                            '0' => 'default/25_1_1.jpg',
                            '1' => 'default/25_1_2.jpg',
                            '2' => 'default/25_1_3.jpg',
                            '3' => 'default/25_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889184,
            'name' => 'Красная S',
            'images' => [
                            '0' => 'default/25_1_1.jpg',
                            '1' => 'default/25_1_2.jpg',
                            '2' => 'default/25_1_3.jpg',
                            '3' => 'default/25_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889185,
            'name' => 'Красная M',
            'images' => [
                            '0' => 'default/25_1_1.jpg',
                            '1' => 'default/25_1_2.jpg',
                            '2' => 'default/25_1_3.jpg',
                            '3' => 'default/25_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889186,
            'name' => 'Красная L',
            'images' => [
                            '0' => 'default/25_1_1.jpg',
                            '1' => 'default/25_1_2.jpg',
                            '2' => 'default/25_1_3.jpg',
                            '3' => 'default/25_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889187,
            'name' => 'Красная XL',
            'images' => [
                            '0' => 'default/25_1_1.jpg',
                            '1' => 'default/25_1_2.jpg',
                            '2' => 'default/25_1_3.jpg',
                            '3' => 'default/25_1_4.jpg'
                        ],
            'color_id' => 6,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889188,
            'name' => 'Серая XS',
            'images' => [
                            '0' => 'default/25_2_1.jpg',
                            '1' => 'default/25_2_2.jpg',
                            '2' => 'default/25_2_3.jpg',
                            '3' => 'default/25_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889189,
            'name' => 'Серая S',
            'images' => [
                            '0' => 'default/25_2_1.jpg',
                            '1' => 'default/25_2_2.jpg',
                            '2' => 'default/25_2_3.jpg',
                            '3' => 'default/25_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889190,
            'name' => 'Серая M',
            'images' => [
                            '0' => 'default/25_2_1.jpg',
                            '1' => 'default/25_2_2.jpg',
                            '2' => 'default/25_2_3.jpg',
                            '3' => 'default/25_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889191,
            'name' => 'Серая L',
            'images' => [
                            '0' => 'default/25_2_1.jpg',
                            '1' => 'default/25_2_2.jpg',
                            '2' => 'default/25_2_3.jpg',
                            '3' => 'default/25_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 20,
            'sku' => 20128889192,
            'name' => 'Серая XL',
            'images' => [
                            '0' => 'default/25_2_1.jpg',
                            '1' => 'default/25_2_2.jpg',
                            '2' => 'default/25_2_3.jpg',
                            '3' => 'default/25_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        
        
        
        














        
        //21----Платье короткое из мягкой ткани
        Product::create([
            'groupproduct_id' => 21,
            'sku' => 20128889193,
            'name' => 'Черное S',
            'images' => [
                            '0' => 'default/4_1_1.jpg',
                            '1' => 'default/4_1_2.jpg',
                            '2' => 'default/4_1_3.jpg',
                            '3' => 'default/4_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 21,
            'sku' => 20128889194,
            'name' => 'Черное M',
            'images' => [
                            '0' => 'default/4_1_1.jpg',
                            '1' => 'default/4_1_2.jpg',
                            '2' => 'default/4_1_3.jpg',
                            '3' => 'default/4_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 21,
            'sku' => 20128889195,
            'name' => 'Черное L',
            'images' => [
                            '0' => 'default/4_1_1.jpg',
                            '1' => 'default/4_1_2.jpg',
                            '2' => 'default/4_1_3.jpg',
                            '3' => 'default/4_1_4.jpg'
                        ],
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 21,
            'sku' => 20128889196,
            'name' => 'Белое S',
            'images' => [
                            '0' => 'default/4_2_1.jpg',
                            '1' => 'default/4_2_2.jpg',
                            '2' => 'default/4_2_3.jpg',
                            '3' => 'default/4_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 21,
            'sku' => 20128889197,
            'name' => 'Белое M',
            'images' => [
                            '0' => 'default/4_2_1.jpg',
                            '1' => 'default/4_2_2.jpg',
                            '2' => 'default/4_2_3.jpg',
                            '3' => 'default/4_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 21,
            'sku' => 20128889198,
            'name' => 'Белое L',
            'images' => [
                            '0' => 'default/4_2_1.jpg',
                            '1' => 'default/4_2_2.jpg',
                            '2' => 'default/4_2_3.jpg',
                            '3' => 'default/4_2_4.jpg'
                        ],
            'color_id' => 1,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        
        //22----Платье с эффектом деграде
        Product::create([
            'groupproduct_id' => 22,
            'sku' => 20128889199,
            'name' => 'Золотистое S',
            'images' => [
                            '0' => 'default/10_1_1.jpg',
                            '1' => 'default/10_1_2.jpg',
                            '2' => 'default/10_1_3.jpg',
                            '3' => 'default/10_1_4.jpg'
                        ],
            'color_id' => 16,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 22,
            'sku' => 20128889200,
            'name' => 'Золотистое M',
            'images' => [
                            '0' => 'default/10_1_1.jpg',
                            '1' => 'default/10_1_2.jpg',
                            '2' => 'default/10_1_3.jpg',
                            '3' => 'default/10_1_4.jpg'
                        ],
            'color_id' => 16,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 22,
            'sku' => 20128889201,
            'name' => 'Золотистое L',
            'images' => [
                            '0' => 'default/10_1_1.jpg',
                            '1' => 'default/10_1_2.jpg',
                            '2' => 'default/10_1_3.jpg',
                            '3' => 'default/10_1_4.jpg'
                        ],
            'color_id' => 16,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
       
        
        
        //23 Блуза с открытыми плечами
        Product::create([
            'groupproduct_id' => 23,
            'sku' => 20128889202,
            'name' => 'Розовая S',
            'images' => [
                            '0' => 'default/5_1_1.jpg',
                            '1' => 'default/5_1_2.jpg',
                            '2' => 'default/5_1_3.jpg',
                            '3' => 'default/5_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 23,
            'sku' => 20128889203,
            'name' => 'Розовая M',
            'images' => [
                            '0' => 'default/5_1_1.jpg',
                            '1' => 'default/5_1_2.jpg',
                            '2' => 'default/5_1_3.jpg',
                            '3' => 'default/5_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 6,
        ]);
        
        Product::create([
            'groupproduct_id' => 23,
            'sku' => 20128889204,
            'name' => 'Розовая L',
            'images' => [
                            '0' => 'default/5_1_1.jpg',
                            '1' => 'default/5_1_2.jpg',
                            '2' => 'default/5_1_3.jpg',
                            '3' => 'default/5_1_4.jpg'
                        ],
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 23,
            'sku' => 20128889205,
            'name' => 'Серая S',
            'images' => [
                            '0' => 'default/5_2_1.jpg',
                            '1' => 'default/5_2_2.jpg',
                            '2' => 'default/5_2_3.jpg',
                            '3' => 'default/5_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 23,
            'sku' => 20128889206,
            'name' => 'Серая M',
            'images' => [
                            '0' => 'default/5_2_1.jpg',
                            '1' => 'default/5_2_2.jpg',
                            '2' => 'default/5_2_3.jpg',
                            '3' => 'default/5_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 23,
            'sku' => 20128889207,
            'name' => 'Серая L',
            'images' => [
                            '0' => 'default/5_2_1.jpg',
                            '1' => 'default/5_2_2.jpg',
                            '2' => 'default/5_2_3.jpg',
                            '3' => 'default/5_2_4.jpg'
                        ],
            'color_id' => 8,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        //22
        

    }
}
