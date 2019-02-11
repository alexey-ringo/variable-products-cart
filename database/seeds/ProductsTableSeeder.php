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
            'color_id' => 3,
            'size_id' => 7,
            'quantity' => 10,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889002,
            'name' => 'Желтая S',
            'color_id' => 3,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889003,
            'name' => 'Желтая M',
            'color_id' => 3,
            'size_id' => 9,
            'quantity' => 7,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889004,
            'name' => 'Желтая L',
            'color_id' => 3,
            'size_id' => 10,
            'quantity' => 9,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889005,
            'name' => 'Желтая XL',
            'color_id' => 3,
            'size_id' => 11,
            'quantity' => 11,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889006,
            'name' => 'Бежевая XS',
            'color_id' => 4,
            'size_id' => 7,
            'quantity' => 3,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889007,
            'name' => 'Бежевая S',
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889008,
            'name' => 'Бежевая M',
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 4,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889009,
            'name' => 'Бежевая L',
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        Product::create([
            'groupproduct_id' => 1,
            'sku' => 20128889010,
            'name' => 'Бежевая XL',
            'color_id' => 4,
            'size_id' => 11,
            'quantity' => 7,
        ]);
        
        //10
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889011,
            'name' => 'Черная S',
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889012,
            'name' => 'Черная M',
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889013,
            'name' => 'Черная L',
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889014,
            'name' => 'Белая S',
            'color_id' => 1,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889015,
            'name' => 'Белая M',
            'color_id' => 1,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 2,
            'sku' => 20128889016,
            'name' => 'Белая L',
            'color_id' => 1,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        //16
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889017,
            'name' => 'Розовая S',
            'color_id' => 7,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889018,
            'name' => 'Розовая M',
            'color_id' => 7,
            'size_id' => 9,
            'quantity' => 6,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889019,
            'name' => 'Розовая L',
            'color_id' => 7,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889020,
            'name' => 'Серая S',
            'color_id' => 8,
            'size_id' => 8,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889021,
            'name' => 'Серая M',
            'color_id' => 8,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 3,
            'sku' => 20128889022,
            'name' => 'Серая L',
            'color_id' => 8,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        //22
        
         Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889023,
            'name' => 'Темно-синяя S',
            'color_id' => 5,
            'size_id' => 8,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889024,
            'name' => 'Темно-синяя M',
            'color_id' => 5,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889025,
            'name' => 'Темно-синяя L',
            'color_id' => 5,
            'size_id' => 10,
            'quantity' => 4,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889026,
            'name' => 'Красная S',
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889027,
            'name' => 'Красная M',
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 5,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889028,
            'name' => 'Красная L',
            'color_id' => 6,
            'size_id' => 10,
            'quantity' => 6,
        ]);
        //28
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889029,
            'name' => 'Бежевая S',
            'color_id' => 4,
            'size_id' => 8,
            'quantity' => 7,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889030,
            'name' => 'Бежевая M',
            'color_id' => 4,
            'size_id' => 9,
            'quantity' => 3,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889031,
            'name' => 'Бежевая L',
            'color_id' => 4,
            'size_id' => 10,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889032,
            'name' => 'Черная S',
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 4,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889033,
            'name' => 'Черная M',
            'color_id' => 2,
            'size_id' => 9,
            'quantity' => 2,
        ]);
        
        Product::create([
            'groupproduct_id' => 4,
            'sku' => 20128889034,
            'name' => 'Черная L',
            'color_id' => 2,
            'size_id' => 10,
            'quantity' => 5,
        ]);
        
        
    }
}
