<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Bershka',
            'slug' => 'bershka',
        ]);
        
        Brand::create([
            'name' => 'H&M',
            'slug' => 'hnm',
        ]);
        
        Brand::create([
            'name' => 'Reserved',
            'slug' => 'reserved',
        ]);
        
        Brand::create([
            'name' => 'Mango',
            'slug' => 'mango',
        ]);
        
        Brand::create([
            'name' => 'Stradivarius',
            'slug' => 'stradivarius',
        ]);
        
        Brand::create([
            'name' => 'Insity',
            'slug' => 'insity',
        ]);
        
        Brand::create([
            'name' => 'Zara',
            'slug' => 'zara',
        ]);
    }
}
