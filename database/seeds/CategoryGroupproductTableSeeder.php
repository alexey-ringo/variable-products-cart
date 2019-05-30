<?php

use Illuminate\Database\Seeder;
use App\CategoryGroupproduct;

class CategoryGroupproductTableSeeder extends Seeder
{
    protected $table = 'category_groupproduct';
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Куртки
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 1,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 2,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 3,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 4,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 5,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 6,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 7,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 8,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 9,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 10,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 11,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 12,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 13,
        ]);
        
        //Пальто
        CategoryGroupproduct::create([
            'category_id' => 5,
            'groupproduct_id' => 14,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 5,
            'groupproduct_id' => 15,
        ]);
        
        //Пиджаки
        CategoryGroupproduct::create([
            'category_id' => 6,
            'groupproduct_id' => 16,
        ]);
        
        //Брюки
        CategoryGroupproduct::create([
            'category_id' => 8,
            'groupproduct_id' => 17,
        ]);
        
        //Джинсы
        CategoryGroupproduct::create([
            'category_id' => 9,
            'groupproduct_id' => 18,
        ]);
        
        //Комбинезоны
        CategoryGroupproduct::create([
            'category_id' => 10,
            'groupproduct_id' => 19,
        ]);
        
        //Юбки
        CategoryGroupproduct::create([
            'category_id' => 11,
            'groupproduct_id' => 20,
        ]);
        
        //Плятья
        CategoryGroupproduct::create([
            'category_id' => 12,
            'groupproduct_id' => 21,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 12,
            'groupproduct_id' => 22,
        ]);
        
        //Блузы
        CategoryGroupproduct::create([
            'category_id' => 13,
            'groupproduct_id' => 23,
        ]);
        
        
        
    }
}
