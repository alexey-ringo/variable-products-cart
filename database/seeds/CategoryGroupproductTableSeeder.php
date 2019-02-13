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
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 1,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 12,
            'groupproduct_id' => 2,
        ]);
        
        CategoryGroupproduct::create([
            'category_id' => 13,
            'groupproduct_id' => 3,
        ]);
        
        
        CategoryGroupproduct::create([
            'category_id' => 4,
            'groupproduct_id' => 4,
        ]);
    }
}
