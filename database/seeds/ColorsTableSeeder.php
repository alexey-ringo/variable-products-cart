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
        //1
        Color::create([
            'value' => 'Белый',
        ]);
        
        //2
        Color::create([
            'value' => 'Черный',
        ]);
        
        //3
        Color::create([
            'value' => 'Желтый',
        ]);
        
        //4
        Color::create([
            'value' => 'Бежевый',
        ]);
        
        //5
        Color::create([
            'value' => 'Темно-синий',
        ]);
        
        //6
        Color::create([
            'value' => 'Красный',
        ]);
        
        //7
        Color::create([
            'value' => 'Розовый',
        ]);
        
        //8
        Color::create([
            'value' => 'Серый',
        ]);
        
        //9
        Color::create([
            'value' => 'Синий',
        ]);
        
        //10
        Color::create([
            'value' => 'Голубой',
        ]);
        
        //11
        Color::create([
            'value' => 'Серебристый',
        ]);
        
        //12
        Color::create([
            'value' => 'Бордовый',
        ]);
        
        //13
        Color::create([
            'value' => 'Фуксия',
        ]);
        
        //14
        Color::create([
            'value' => 'Зеленый',
        ]);
        
        //15
        Color::create([
            'value' => 'Хаки',
        ]);
        
        //16
        Color::create([
            'value' => 'Золотистый',
        ]);
    }
}
