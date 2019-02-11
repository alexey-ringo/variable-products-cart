<?php

use Illuminate\Database\Seeder;
use App\Size;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'value' => '32',
        ]);
        
        Size::create([
           'value' => '34',
        ]);
        
        Size::create([
            'value' => '36',
        ]);
        
        Size::create([
            'value' => '38',
        ]);
        
        Size::create([
            'value' => '40',
        ]);
        
        Size::create([
            'value' => '42',
        ]);
        
        Size::create([
            'value' => 'XS',
        ]);
        
        Size::create([
            'value' => 'S',
        ]);
        
        Size::create([
            'value' => 'M',
        ]);
        
        Size::create([
            'value' => 'L',
        ]);
        
        Size::create([
            'value' => 'XL',
        ]);
        
        Size::create([
            'value' => 'XXL',
        ]);
    }
}
