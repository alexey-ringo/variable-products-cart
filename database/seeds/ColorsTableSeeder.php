<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'value' => 'Белый',
        ]);
        
        Color::create([
            'value' => 'Черный',
        ]);
        
        Color::create([
            'value' => 'Желтый',
        ]);
        
        Color::create([
            'value' => 'Бежевый',
        ]);
        
        Color::create([
            'value' => 'Темно-синий',
        ]);
        
        Color::create([
            'value' => 'Красный',
        ]);
        
        Color::create([
            'value' => 'Розовый',
        ]);
        
        Color::create([
            'value' => 'Серый',
        ]);
    }
}
